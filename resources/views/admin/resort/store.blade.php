<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <form action="">
        <h2>Danh sách sản phẩm</h2>

        <hr>
        <table>
            <tr>
                <th>Name</th>
                <th>price</th>
                <th>limit</th>
                <th>size</th>
                <th>bed</th>
                <th>category</th>
                <th>image</th>
                <th>desc</th>
            </tr>
            @foreach ($resorts as $resort)
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </form>
</body>
</html>