@extends('layouts.admin')
@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
    <link href="{{ asset('vendors\slelect2\select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('admins\category\index\index.css') }}">
@endsection

@section('content')
    <div class="content-wrapper">
        @include('includes.admin.content-header', ['name' => 'Category', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="">
                                    <div class="input-group">
                                        <div class="form-outline">
                                            <input data-url="{{ route('categories.search') }}" type="search" name="search" value="{{ old('search') }}" id="search"
                                                class="form-control" placeholder="Search" />
                                        </div>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('categories.create') }}" class="btn btn-primary float-right m-2">Add</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody id="list_categories">
                                @if ($categories->count())
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <a href="{{ route('categories.edit', ['id' => $category->id]) }}"
                                                    class="btn btn-primary">Sửa</a>
                                                <a href="{{ route('categories.delete', ['id' => $category->id]) }}"
                                                    class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <th colspan="3" class="text-center">Empty</th>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{-- {{ $categories->links() }} --}}
                        {{ $categories->appends(request()->all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(function() {
            $('#search').on('keyup' , function() {
                var search = $(this).val();
                var url = $(this).data('url')
                $.ajax({
                    type: "get",
                    url: url,
                    data: {
                        search: search
                    },
                    dataType: 'json',
                    success: function(response) {
                        $('#list_categories').html(response);
                    }
                });
            })
        });
    </script>
@endsection
