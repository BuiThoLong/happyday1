<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Sửa resort</title>
</head>
<body>
    <div class="container">
        <h2>Sửa resort: {{$resort->name}}</h2>
        <hr>
        <form action="" class="mt-4" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input class="form-control" value={{$resort->name}} type="text" name="name">
            </div>
            <div class="form-group">
                <label for="">Giá</label>
                <input class="form-control" value={{$resort->price}} type="text" name="price">
            </div>
            <div class="form-group">
                <label for="">Giới hạn</label>
                <input class="form-control" value={{$resort->limit}} type="text" name="limit">
            </div>
            <div class="form-group">
                <label for="">Size</label>
                <input class="form-control" value={{$resort->size}} type="text" name="size">
            </div>
            <div class="form-group">
                <label for="">bed</label>
                <input class="form-control" value={{$resort->bed}} type="text" name="bed">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" id="" class="form-control" value={{$resort->category_id}}>
                    @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Hình ảnh</label>
                <input class="form-control" value={{$resort->image->path}} type="text" name="upFile" id="">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="desc" id="" cols="30" rows="10" class="form-control">
                    {{$resort->name}}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</body>
</html>