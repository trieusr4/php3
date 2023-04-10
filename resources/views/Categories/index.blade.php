@extends('layout.admin')
@section('content')
    <div class="container">
        <div class="row">
            <form action="" style="margin-bottom: 35px; margin-top: 25px; display: flex">
                <div class="input-group mb-3">
                    <input value="{{ request()->key }}" name="key" type="text" class="form-control" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
            </form>
            <div class="col-lg-6"><a href="/categories/create" class="btn btn-primary">Thêm</a></div>
            <div class="col-lg-6"></div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xoá</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <th scope="row">{{ $item->name }}</th>
                            <th scope="row"><a href="/categories/{{ $item->id }}/edit"
                                    class="btn btn-warning">Sửa</a></th>
                            <th scope="row">
                                <form action="/categories/{{ $item->id }}/delete" method="post" style="display:inline">
                                    @csrf
                                    @Method('DELETE')
                                    <input type="submit" value="Xoá" class="btn btn-danger">
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $list->appends(request()->all())->links() }}
        </div>
    </div>
@endsection
