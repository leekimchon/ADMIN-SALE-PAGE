@extends('layouts.admin')
@section('title')
<title>Sửa sản phẩm</title>
@endsection

@section('css')
    <link href="{{ asset('vendors\slelect2\select2.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="content-wrapper">
      @include('includes.admin.content-header', ['name' => 'Product', 'key' => 'Add'])
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                 <form action="{{ route('product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data"> 
                  @csrf
                    <div class="form-group">
                      <label for="name">Tên sản phẩm</label>
                      <input name="name" value="{{ $product->name }}" type="text" class="form-control" id="name" placeholder="nhập tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label for="price">Giá gốc</label>
                        <input name="price" value="{{ $product->price }}" type="text" class="form-control" id="price" placeholder="nhập tên giá gốc">
                      </div>
                      <div class="form-group">
                        <label for="discount_price">Giá bán</label>
                        <input name="discount_price" value="{{ $product->discount_price }}" type="text" class="form-control" id="discount_price" placeholder="nhập giá bán">
                      </div>
                      <div class="form-group">
                        <label for="feature_image_path">Ảnh chính</label>
                        <input name="feature_image_path" type="file" class="form-control-file" id="feature_image_path">
                      </div>
                      <div class="form-group">
                        <label for="detail_image_path">Ảnh phụ</label>
                        <input name="detail_image_path[]" type="file" multiple class="form-control-file" id="detail_image_path">
                      </div>
                    <div class="form-group">
                        <label for="category_id">Chọn danh mục Sản phẩm</label>
                        <select name="category_id" class="form-control select2_init" id="category_id">
                            {!! $option !!}
                          </select>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
@endsection

@section('js')
    {{-- <script src="{{ asset('vendors\slelect2\select2.min.js') }}"></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="{{ asset('admins\product\add\add.js') }}"></script> --}}
@endsection