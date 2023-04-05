@extends('layout.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6"><a href="/news/create" class="btn btn-primary">Thêm</a></div>
        <div class="col-lg-6"></div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Mô tả</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($list as $item)
              <tr>
                <th scope="row">{{$item -> id}}</th>
                <th scope="row">{{$item -> title}}</th>
                <th scope="row">
                    <img style="width: 100%" src="{{$item -> image}}" />
                </th>
                <th scope="row">{{$item -> des}}</th>
                <th scope="row"><a href="/news/{{ $item->id }}/edit" class="btn btn-warning">Sửa</a></th>
                <th scope="row">
                    <form action="/news/{{ $item->id }}/delete" method="post" style="display:inline">
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