@extends('layout.admin')
@section('content')
<div class="container">
    <div class="row">
        <form action="/categories/{{ $category->id }}/update" method="post">
            @csrf
            @Method('PUT')
            <label for="">Tên:</label>
            <input type="text" name="name" value="{{ $category->name }}" class="form-control">
            <br>
            <input type="submit" value="Cập nhật" class="btn btn-success">
        </form>
    </div>
</div>
@endsection

