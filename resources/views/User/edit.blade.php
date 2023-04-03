<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="/users/{{ $user->id }}/update" method="post">
                @csrf
                @Method('PUT')
                <label for="">Tên:</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                <br>
                <label for="">Email</label>
                <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                <br>
                <label for="">Mật khẩu</label>
                <input type="password" name="password" class="form-control">
                <br>
                <label for="">Vai trò</label>
                <select name="role" class="form-select">
                    <option {{ ($user -> role == '1' ? "selected":"") }} value="1">Admin</option>
                    <option {{ ($user -> role == '2' ? "selected":"") }} value="2">Người viết bài</option>
                    <option {{ ($user -> role == '3' ? "selected":"") }} value="3">Người dùng</option>
                  </select>
                <br>
                <input type="submit" value="Thêm mới" class="btn btn-success">
            </form>
        </div>
    </div>
</body>
</html>