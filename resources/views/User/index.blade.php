@extends('layout.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-6"><a href="/users/create" class="btn btn-primary">Thêm</a></div>
        <div class="col-lg-6"></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Vai trò</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <th scope="row">{{ $item->name }}</th>
                        <th scope="row">{{ $item->email }}</th>
                        <th scope="row">
                            @switch($item->role)
                                @case('1')
                                    Admin
                                @break
                                @case('2')
                                    Người viết bài
                                @break
                                @default
                                    Người dùng
                            @endswitch

                        </th>
                        <th scope="row"><a href="/users/{{ $item->id }}/edit" class="btn btn-warning">Sửa</a>
                        </th>
                        <th scope="row">
                            <form action="/users/{{ $item->id }}/delete" method="post" style="display:inline">
                                @csrf
                                @Method('DELETE')
                                <input type="submit" value="Xoá" class="btn btn-danger">
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection