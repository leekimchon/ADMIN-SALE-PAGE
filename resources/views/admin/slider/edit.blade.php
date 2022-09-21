@extends('layouts.admin')
@section('title')
<title>Sửa Slider</title>
@endsection
@section('content')
    <div class="content-wrapper">
      @include('includes.admin.content-header', ['name' => 'Category', 'key' => 'Add'])
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
                <form action="{{ route('slider.update', ['id' => $slider->id]) }} " method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="link_load">Link_load</label>
                      <input name="link_load" value="{{ old('link_load') ?? $slider->link_load }}" type="text" class="form-control" id="link_load" placeholder="nhập link_load">
                      <span class="text-danger">{{ $errors->first('link_load') }}</span>
                    </div>
                    <div class="form-group">
                      <label for="image">Ảnh</label>
                      <input name="image" type="file" class="form-control-file" id="image">
                      <span class="text-danger">{{ $errors->first('image') }}</span>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
      
    </div>
@endsection
