@extends('layout.admin')
@section('admin')
<section class="content-header">
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
                        <a href="{{ url('/user') }}" class="btn btn-default btn-sm "><i class="fa fa-remove"></i>
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
<section class="content appTuyenSinh">
    <div id="msg-box">
        <?php
        ?>  
        @if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
        @endif
        <?php //Hiển thị thông báo lỗi
        ?>
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
    </div>
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
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 50px" class="text-center"> ID </th>
                            <th class="text-center">Tên Dự Án</th>
                            <th class="text-center">Chủ đầu tư</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Địa chỉ</th>
                            <th class="text-center">Ảnh</th>
                            <th class="text-center">Mô tả</th>

                        </tr>

                        @foreach($list as $items)
                        <tr>
                            {{-- <td><input type="checkbox" name="chk_hv[]" class="chk_hv" id="chk_hv_{{$item->id}}" value="{{$item->id}}"> </td>--}}
                            <td class="text-center">{{$items -> id}} </td>
                            <td class="text-center"><a style="color:#333333;font-weight: bold;" href="" style="white-space:unset;text-align: justify;">
                                    {{$items -> project_name}}
                                    <i class="fa fa-edit"></i></a>
                            </td>
                            <td class="text-center">{{$items -> owner}} </td>
                            <td class="text-center">{{$items -> status}} </td>
                            <td class="text-center">{{$items -> address}} </td>
                            <td class="text-center">
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-4 control-label"> <span class="text-danger"></span></label>
                                    <div class="col-md-9 col-sm-8">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <img id="mat_truoc_preview" src="{{ $items->images?''.Storage::url($items->images):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
                                                <label for="cmt_truoc"></label><br />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">{{$items -> description}} </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div>
        <br>
        {{-- <div class="text-center">
            {{ $list->appends($extParams)->links() }}
        </div> --}}
        <index-cs ref="index_cs"></index-cs>
</section>
@endsection