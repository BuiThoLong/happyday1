<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Danh sách sản phẩm</h2>
        <hr>
            <a class="btn btn-primary" href="{{route("create.resort")}}">Thêm sản phẩm</a>
            <table class="table">
                <tr class="thead-dark">
                    <th scope="col">Name</th>
                    <th scope="col">price</th>
                    <th scope="col">limit</th>
                    <th scope="col">size</th>
                    <th scope="col">bed</th>
                    <th scope="col">category</th>
                    <th scope="col">image</th>
                    <th scope="col">desc</th>
                    <th scope="col" colspan="2">remote</th>
                </tr>
                @foreach ($resorts as $resort)
                    <tr>
                        <td>{{$resort->name}}</td>
                        <td>{{$resort->price}}</td>
                        <td>{{$resort->limit}}</td>
                        <td>{{$resort->size}}</td>
                        <td>{{$resort->bed}}</td>
                        <td>{{$resort->category_id}}</td>
                        <td><img src="{{$resort->image->path}}" width="100"></td>
                        <td>{{$resort->desc}}</td>
                        <td><a href="{{route("edit.resort", ["id" => $resort->id])}}" class="btn btn-primary">sửa</a></td>
                        <td><button data-route="{{route("remove.resort", ["id" => $resort->id])}}" class="btn btn-danger delete" data-bs-toggle="modal" data-bs-target="#exampleModal">xóa</button></td>
                    </tr>
                @endforeach
            </table>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thông báo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Bạn có muốn xóa sản phẩm này không hành động này không thể khôi phục ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <a href="" type="button" class="btn btn-danger" id="confirm_delete">Xác nhận</a>
        </div>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        const btnDelete = document.querySelectorAll(".delete");
        const btnConfirm = document.querySelector("#confirm_delete");
        btnDelete.forEach(element => {
            element.addEventListener("click", (e) => {
                console.log(e.target.getAttribute("data-route"))
                btnConfirm.href = e.target.getAttribute("data-route"); 
            })
        });
    </script>
</body>
</html>