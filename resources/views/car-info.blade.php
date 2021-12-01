<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>chi tiết </h1>
<table class="table table-hover" >
        <thead>
            <tr>
                <th>id</th>
                <th>quantily</th>
                <th>color</th>
                <th>image</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $car-info->id }}</td>
                <td>{{ $car-info->quanlity}}</td>
                <td>{{ $car-info->color}}</td>
                <td> <img src="/images/{{ $car-info->color }}" width=200px /></td>
                <td>{{ $car-info->price }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>