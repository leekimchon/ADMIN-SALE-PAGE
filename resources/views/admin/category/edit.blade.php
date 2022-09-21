@extends('layouts.admin')
@section('title')
<title>Sửa danh mục</title>
@endsection
@section('content')
    <div class="content-wrapper">
      @include('includes.admin.content-header', ['name' => 'Category', 'key' => 'Add'])
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="{{ route('categories.update', ['id' => $category->id]) }} " method="POST">
                  @csrf
                    <div class="form-group">
                      <label for="name">Tên danh mục</label>
                      <input name="name" value="{{ old('name') ?? $category->name }}" type="text" class="form-control" id="name" placeholder="nhập tên danh mục">
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="parent_id">Chọn danh mục cha</label>
                        <select name="parent_id" class="form-control" id="parent_id">
                            <option value="0">Chọn danh mục cha</option>
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
