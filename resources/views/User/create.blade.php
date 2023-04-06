@extends('layout.admin')
@section('content')
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
{{-- <div class="container">
    <div class="row">
        <form action="/users/add" method="post">
            @csrf
            <label for="">Tên:</label>
            <input type="text" name="name" class="form-control">
            <br>
            <label for="">Email</label>
            <input type="text" name="email" class="form-control">
            <br>
            <label for="">Mật khẩu</label>
            <input type="password" name="password" class="form-control">
            <br>
            <label for="">Vai trò</label>
            <select name="role" class="form-select">
                <option value="1">Admin</option>
                <option value="2">Người viết bài</option>
                <option value="3">Người dùng</option>
              </select>
            <br>
            <input type="submit" value="Thêm mới" class="btn btn-success">
        </form>
    </div>
</div> --}}

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

    <!-- Phần nội dung riêng của action  -->
        <form class="form-horizontal "  action="/users/add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <h1 style="text-align: center;color:springgreen;" class="">THÊM Người dùng</h1>
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Tên  <span class="text-danger"></span></label>
                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="name" id="name" class="form-control">
                                <span id="mes_sdt"></span>
                            </div>
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Email <span class="text-danger"></span></label>
                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="email" id="email" class="form-control">
                                <span id="mes_sdt"></span>
                            </div>
                            <hr>
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Password <span class="text-danger"></span></label>
                            <div class="col-md-9 col-sm-8">
                                <input type="password" name="password" class="form-control">
                                <span id="mes_sdt"></span>
                            </div>
                            
                            <label for="" class="col-md-3 col-sm-4 control-label">Vai trò</label>
                            <select name="role" class="form-select form-control">
                                <option value="1">Admin</option>
                                <option value="2">Người viết bài</option>
                                <option value="3">Người dùng</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary" value="Thêm Mới"> Thêm mới</button>
                <a href="/categories" class="btn btn-default">Cancel</a>
            </div>
        </form>
@endsection