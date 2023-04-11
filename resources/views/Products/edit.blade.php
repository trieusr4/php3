@extends('layout.admin')
@section('content')
<section class="content appTuyenSinh">
    <link rel="stylesheet" href="{{ asset('default/bower_components/select2/dist/css/select2.min.css')}} ">
    <style>
        .select2-container--default .select2-selection--single, .select2-selection .select2-selection--single {
            padding: 3px 0px;
            height: 30px;
        }
        .select2-container {
            margin-top: -5px;
        }

        option {
            white-space: nowrap;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 0px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: #216992;
        }
        .select2-container--default .select2-selection--multiple{
            margin-top:10px;
            border-radius: 0;
        }
        .select2-container--default .select2-results__group{
            background-color: #eeeeee;
        }
    </style>

    <?php //Hiển thị thông báo thành công?>
    @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif
    <?php //Hiển thị thông báo lỗi?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
@endif
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