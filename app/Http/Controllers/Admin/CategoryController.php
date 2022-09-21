<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recursive;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller {
    public $result = '';

    public function index() {
        $categories = Category::latest()->paginate(2);
        if(isset(request()->search)){
            $categories = Category::where('name', 'LIKE', '%'.request()->search.'%')->paginate(1);
        }
        return view('admin.category.index', ['categories' => $categories]);
    }
    public function search(){
        $outPut = '';
        $categories = Category::where('name', 'LIKE', '%'.request()->search.'%')->paginate(1);
        foreach($categories as $category){
            $outPut .= '<tr>
                            <td>' . $category->id. '</td>
                            <td>' . $category->name . '</td>
                            <td>
                                <a href=""
                                    class="btn btn-primary">Sửa</a>
                                <a href=""
                                    class="btn btn-danger">Xóa</a>
                            </td>
                        </tr>';

            return response()->json($outPut);
        }
    }
    public function create() {
        $categories = Category::all();
        $option  = Recursive::recursiveCategory($categories);
        return view('admin.category.add', ['option' => $option]);
    }
    public function store(CategoryRequest $request) {
        Category::create( $request->all() );
        return redirect()->route('categories.index');
    }
    public function edit($id) {
        $category = Category::find($id);
        $categories = Category::all();
        $option  = Recursive::recursiveCategory($categories, $category->parent_id);
        $data = [
            'category' => $category,
            'option' => $option
        ];
        return view('admin.category.edit', $data);
    }
    public function update($id, CategoryRequest $request) {
        $request->validate([
            'name' => 'required',
            'parent_id' => 'required'
        ]);
        Category::find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ]);
        return redirect()->route('categories.index');
    }
    public function delete($id) {
        Category::find($id)->delete();
        return redirect()->route('categories.index');
    }
}
