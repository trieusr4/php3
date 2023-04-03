<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="/categories/{{ $category->id }}/update" method="post">
                @csrf
                @Method('PUT')
                <label for="">Tên:</label>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                <br>
                <input type="submit" value="Thêm mới" class="btn btn-success">
            </form>
        </div>
    </div>
</body>
</html>