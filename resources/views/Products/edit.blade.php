@extends('layout.admin')
@section('content')
<div class="container">
    <div class="row">
        <form action="/products/{{ $product->id }}/update" method="post" enctype="multipart/form-data">
            @csrf
            @Method('PUT')
            <label for="">Tiêu đề:</label>
            <input type="text" name="title" value="{{ $product->title }}" class="form-control">
            <br>
            <label for="">Tên:</label>
            <input type="text" name="name" value="{{ $product->name }}"  class="form-control">
            <br>
            <label for="">Giá:</label>
            <input type="number" name="price" value="{{ $product->price }}"  class="form-control">
            <br>
            <label for="">Mô tả:</label>
            <input type="text" name="description" value="{{ $product->description }}"  class="form-control">
            <br>
            <label for="">Ảnh:</label>
            <input type="file" class="form-control" name="image" />
            <br>
            <label for="">Diện tích:</label>
            <input type="number" name="acreage" value="{{ $product->acreage }}" class="form-control">
            <br>
            <label for="">Phòng ngủ:</label>
            <input type="number" name="bedroom" value="{{ $product->bedroom }}" class="form-control">
            <br>
            <label for="">Trạng thái</label>
            <select name="status" class="form-select">
                <option {{ ($product -> status == '1' ? "selected":"") }} value="1">Đang rao bán</option>
                <option {{ ($product -> status == '2' ? "selected":"") }} value="2">Đã bán</option>
              </select>
            <br>
            <input type="submit" value="Cập nhật" class="btn btn-success">
        </form>
    </div>
</div>
@endsection