@extends('layouts.admin')
@section('title')
    <title>Thêm tài khoản</title>
@endsection
@php
//  dd($roles)
@endphp
@section('content')
    <div class="content-wrapper">
        @include('includes.admin.content-header', ['name' => 'Category', 'key' => 'Add'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('user.store') }} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Họ tên</label>
                                    <input name="name" value="{{ old('name') }}" type="text" class="form-control"
                                        id="name" placeholder="nhập họ tên">
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input name="email" value="{{ old('email') }}" type="text" class="form-control"
                                        id="email" placeholder="nhập email">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input name="password" value="{{ old('password') }}" type="password"
                                        class="form-control" id="password" placeholder="nhập mật khẩu">
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="re_password">Nhập lại mật khẩu</label>
                                    <input name="re_password" value="{{ old('re_password') }}" type="password"
                                        class="form-control" id="re_password" placeholder="nhập lại mật khẩu">
                                    <span class="text-danger">{{ $errors->first('re_password') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">Vai trò</label>
                            </div>
                            <div class="custom-control custom-checkbox row d-flex mb-4">
                                {{-- <div class="form-check col-12">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">CheckAll</label>
                                </div> --}}
                                @foreach ($roles as $role)
                                    <div class="form-check col-3">
                                        <input name="roles_id[]" value="{{ $role->id }}" class="form-check-input" type="checkbox" id="gridCheck{{ $role->id }}">
                                        <label class="form-check-label" for="gridCheck{{ $role->id }}">{{ $role->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
