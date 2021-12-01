<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>

<body>
    <h1 class="text-center" style="color:blue;">Danh sách tất cả các xe</h1>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Description</th>
                    <th>Produced_on</th>
                    <th>Image</th>
                    <th>Manufacturer</th>
                    
                    <th>color</th>
                    <th>quantity</th>
                     <th>price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                <tr>
                    <td>
                        {{ $car->id }}
                    </td>
                    <td>
                        {{ $car->description }}
                    </td>
                  
                    <td>
                        {{ $car->produced_on }}
                        </td>
                    <td>
                      <img src="/images/{{ $car->image }}" width=200px />
                    </td>
                    <td>
                        {{ $car->mf->mf_name }}
                    </td>
                    <td>
                        {{ $car->carinfo->color }}
                    </td>
                    <td>
                        {{ $car->carinfo->quantity }}
                    </td>
                   
                    <td>
                        {{ $car->carinfo->price }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>