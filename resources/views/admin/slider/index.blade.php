@extends('layouts.admin')
@section('title')
<title>Sản phẩm</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admins\product\index\index.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
      @include('includes.admin.content-header', ['name' => 'Product', 'key' => 'List'])
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{ route('slider.create') }}" class="btn btn-primary float-right m-2">Add</a>
            </div>
            <div class="col-md-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Link_load</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Tùy chọn</th>
                  </tr>
                </thead>
                <tbody>
                  @if($sliders->count())
                      @foreach ($sliders as $slider)
                          <tr>
                            <td> {{ $slider->id }} </td>
                            <td> {{ $slider->link_load }} </td>
                            <td> 
                              <img style="height: 50px;" src="{{ asset($slider->image) }}" alt="">
                            </td>
                            <td>
                              <a href="{{ route('slider.edit', ['id' => $slider->id]) }}" class="btn btn-primary">Sửa</a>
                              <a href="{{ route('slider.delete', ['id' => $slider->id]) }}"
                                  data-url="{{ route('slider.delete', ['id' => $slider->id]) }}"
                                  class="btn btn-danger ajax_delete">
                                  Xóa
                              </a>
                            </td>
                          </tr>
                      @endforeach
                  @else
                      <tr>
                          <th colspan="4" class="text-center">Empty</th>
                      </tr>
                  @endif
                </tbody>
              </table>
            </div>
            <div class="col-md-12">
              {{ $sliders->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('admins\product\index\index.js') }}"></script>
@endsection