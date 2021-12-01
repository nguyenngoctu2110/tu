<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Xin chào tất cả mọi người </h1>
<table class="table table-hover" >
        <thead>
            <tr>
                <th>id</th>
                <th>make</th>
                <th>model</th>
                <th>produced_on</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->make }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->produced_on }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>