@extends('layouts.admin')
@section('title')
<title>Tài khoản</title>
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
              <a href="{{ route('user.create') }}" class="btn btn-primary float-right m-2">Add</a>
            </div>
            <div class="col-md-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tùy chọn</th>
                  </tr>
                </thead>
                <tbody>
                  @if($users->count())
                      @foreach ($users as $user)
                          <tr>
                            <td> {{ $user->id }} </td>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td>
                              <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-primary">Sửa</a>
                              <a href="{{ route('user.delete', ['id' => $user->id]) }}"
                                  data-url="{{ route('user.delete', ['id' => $user->id]) }}"
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
              {{ $users->links() }}
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