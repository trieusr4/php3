@extends('layout.admin')
@section('content')
    <div class="container">
        <div class="row">
            <form action="/news/add" method="post" enctype="multipart/form-data">
                @csrf
                <label for="">Tiêu đề:</label>
                <input value="{{$new -> title}}" type="text" name="title" class="form-control">
                <br>
                <label for="">Ảnh:</label>
                <input type="file" class="form-control" name="image" />
                <br>
                <label for="">Mô tả:</label>
                <input value="{{$new -> des}}" type="text" name="description" class="form-control">
                <br>
                <input type="submit" value="Thêm mới" class="btn btn-success">
            </form>
        </div>
    </div>
@endsection
