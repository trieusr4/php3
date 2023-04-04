@extends('layout.admin')
@section('content')
<div class="container">
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
</div>
@endsection