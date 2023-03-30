@extends('layout.admin')
@section('admin')
<section class="content-header">
    {{-- @include('templates.header-action')--}}
    <div class="clearfix"></div>
    <div style="border: 1px solid #ccc;margin-top: 10px;padding: 5px;">
        <form action="" method="get">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <input type="text" name="search_ten_nguoi_dung" class="form-control" placeholder="Tên dự án" value="">
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12" style="text-align:center;">
                    <div class="form-group">
                        <button type="submit" name="btnSearch" class="btn btn-primary btn-sm "><i class="fa fa-search" style="color:white;"></i> Search
                        </button>
                        <a href="" class="btn btn-default btn-sm "><i class="fa fa-remove"></i>
                            Clear </a>
                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-user-plus" style="color:white;"></i>
                            Add new</a>
                    </div>
                </div>
            </div>

        </form>
        <div class="clearfix"></div>
    </div>
</section>

<!-- Main content -->
<section class="content appTuyenSinh">
    @if(count($list)<=0) <p class="alert alert-warning">
        Không có dữ liệu phù hợp
        </p>
        @endif
        <div class="box-body table-responsive no-padding">
            <form action="" method="post">
                @csrf
                <span class="pull-right">Tổng số bản ghi tìm thấy: <span style="font-size: 15px;font-weight: bold;">8</span></span>
                <div class="clearfix"></div>
                <div class="double-scroll">
                    <table class="table table-bordered "> 
                        <tr>
                            <th style="width: 50px" class="text-center"> ID </th>
                            <th class="text-center">Tên Dự Án</th>
                            <th class="text-center">Chủ đầu tư</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Địa chỉ</th>
                            <th class="text-center">Ảnh</th>
                            <th class="text-center">Thông Tin</th>
                            <th class="text-center">Mặt tiền</th>
                            <th class="text-center">Phòng Ngủ</th>
                            <th class="text-center">Số tầng</th>
                            <th class="text-center">Nội thất</th>
                        </tr>
                        @foreach($list as $items)
                        <tr>
                            {{-- <td><input type="checkbox" name="chk_hv[]" class="chk_hv" id="chk_hv_{{$item->id}}" value="{{$item->id}}"> </td>--}}
                            <td class="text-center">{{$items -> id}} </td>
                            <td class="text-center"><a style="color:#333333;font-weight: bold;" href="" style="white-space:unset;text-align: justify;">
                                    {{$items -> ten_du_an}}
                                    <i class="fa fa-edit"></i></a>
                            </td>
                            <td class="text-center">{{$items -> chu_dau_tu}} </td>
                            <td class="text-center">{{$items -> trang_thai_du_an}} </td>
                            <td class="text-center">{{$items -> dia_chi}} </td>
                            <td class="text-center">
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-4 control-label"> <span class="text-danger"></span></label>
                                    <div class="col-md-9 col-sm-8">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <img id="mat_truoc_preview" src="{{ $items->anh?''.Storage::url($items->images):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
                                                <label for="cmt_truoc"></label><br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{$items -> thong_tin}} </td>
                            <td class="text-center">{{$items -> mat_tien}} </td>
                            <td class="text-center">{{$items -> so_phong_ngu}} </td>
                            <td class="text-center">{{$items -> so_tang}} </td>
                            <td class="text-center">{{$items -> noi_that}} </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div>
        <br>
</section>

@endsection