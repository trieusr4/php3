@extends('layout.admin')
@section('content')
<div class="container">
    <div class="row">
        <form action="/products/add" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Tiêu đề:</label>
            <input type="text" name="title" class="form-control">
            <br>
            <label for="">Tên:</label>
            <input type="text" name="name" class="form-control">
            <br>
            <label for="">Giá:</label>
            <input type="number" name="price" class="form-control">
            <br>
            <label for="">Mô tả:</label>
            <input type="text" name="description" class="form-control">
            <br>
            <label for="">Ảnh:</label>
            <input type="file" class="form-control" name="image" />
            <br>
            <label for="">Diện tích:</label>
            <input type="number" name="acreage" class="form-control">
            <br>
            <label for="">Phòng ngủ:</label>
            <input type="number" name="bedroom" class="form-control">
            <br>
            <label for="">Trạng thái</label>
            <select name="status" class="form-select">
                <option value="1">Đang rao bán</option>
                <option value="2">Đã bán</option>
              </select>
            <br>
            <input type="submit" value="Thêm mới" class="btn btn-success">
        </form>
    </div>
</div>
@endsection