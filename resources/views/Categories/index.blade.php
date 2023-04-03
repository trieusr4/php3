<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
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
                    <th scope="row">{{$item -> id}}</th>
                    <th scope="row">{{$item -> name}}</th>
                    <th scope="row"><a href="/categories/{{ $item->id }}/edit" class="btn btn-warning">Sửa</a></th>
                    <th scope="row">
                        <form action="/categories/{{ $item->id }}/delete" method="post" style="display:inline">
                            @csrf
                            @Method("DELETE")
                            <input type="submit" value="Xoá" class="btn btn-danger">
                        </form>
                    </th>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</body>
</html>