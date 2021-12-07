<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Thêm sản phẩm</title>
</head>
<body>
    <div class="container">
        <h2>Thêm sản phẩm</h2>
        <hr>
        <form action="" class="mt-4" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input class="form-control" type="text" name="price">
            </div>
            <div class="form-group">
                <label for="">Giới hạn</label>
                <input class="form-control" type="text" name="limit">
            </div>
            <div class="form-group">
                <label for="">Size</label>
                <input class="form-control" type="text" name="size">
            </div>
            <div class="form-group">
                <label for="">bed</label>
                <input class="form-control" type="text" name="bed">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh</label>
                <input class="form-control" type="file" name="upFile" id="">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="desc" id="" cols="30" rows="10" class="form-control">
    
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
        </form>
    </div>
</body>
</html>