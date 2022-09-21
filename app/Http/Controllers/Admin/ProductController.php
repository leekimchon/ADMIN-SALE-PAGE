<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Components\Recursive;
use App\Http\Requests\ProductRequest;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;
use Exception;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller {
    function index() {
        // dd(Product::all());
        $products = Product::latest()->paginate(5);
        $params = [
            'products' => $products
        ];
        return view('admin.product.index', $params);
    }
    function create() {
        $categories = Category::all();
        $products = Product::all();
        $option  = Recursive::recursiveCategory($categories);
        $params = [
            'option' => $option,
            'products' => $products
        ];
        return view('admin.product.add', $params);
    }
    function store(ProductRequest $request) {
        try{
            DB::beginTransaction();
            $file_feature = $request->file('feature_image_path');
            $feature_path = 'storage/' . $file_feature->store('images/product', 'public');

            $data_create = [
                'name' => $request->name,
                'price' => $request->price,
                'discount_price' => $request->discount_price,
                'category_id' => $request->category_id,
                'feature_image_path' => $feature_path
            ];
            $product = Product::create($data_create);

            $file_details = $request->file('detail_image_path');
            foreach($file_details as $file_detail){
                $detail_path = 'storage/' . $file_detail->store('images/product', 'public');
                $data_image_detail = [
                    'detail_image_path' => $detail_path,
                    'product_id' => $product->id
                ];
                ProductImage::create($data_image_detail);
            }
            DB::commit();
            return redirect()->route('product.index');
        }catch(Exception $exception){
            DB::rollBack();
            Session::flash('error', 'loi');
            Log::error('messages'.$exception->getMessage().'line'.$exception->getLine().'file'.$exception->getFile());
            return redirect()->route('product.create');
        }
    }
    function edit($id){
        $product = Product::find($id);
        $categories = Category::all();
        $option = Recursive::recursiveCategory($categories, $product->category_id);

        $params = [
            'option' => $option,
            'product' => $product
        ];
        return view('admin.product.edit', $params);
    }
    function delete($id){
        $product = Product::find($id);
        $product->delete();
        ProductImage::where('product_id', '=', $product->id)->delete();
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], status: 200);
    }
}