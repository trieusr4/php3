@extends('layout.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6"><a href="/products/create" class="btn btn-primary">Thêm</a></div>
        <div class="col-lg-6"></div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Tên</th>
                <th scope="col">Giá</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Diện tích</th>
                <th scope="col">Phòng ngủ</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Người đăng</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($list as $item)
              <tr>
                <th scope="row">{{$item -> id}}</th>
                <th scope="row">{{$item -> title}}</th>
                <th scope="row">{{$item -> name}}</th>
                <th scope="row">{{$item -> price}}</th>
                <th scope="row">
                    <img style="width: 100%" src="{{$item -> img}}" />
                </th>
                <th scope="row">{{$item -> description}}</th>
                <th scope="row">{{$item -> acreage}}</th>
                <th scope="row">{{$item -> bedroom}}</th>
                <th scope="row">{{$item -> status}}</th>
                <th scope="row">Duong</th>
                <th scope="row"><a href="/products/{{ $item->id }}/edit" class="btn btn-warning">Sửa</a></th>
                <th scope="row">
                    <form action="/products/{{ $item->id }}/delete" method="post" style="display:inline">
                        @csrf
                        @Method("DELETE")
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