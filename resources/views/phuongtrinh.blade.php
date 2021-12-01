 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container">
        <form action="{{ route('phuongtrinh') }}" method="POST" role="form">
            @csrf
          <h1>  <legend style="color:blue ;">Giải phương trình bậc nhất </legend></h1>
            <div class="form-group">
                <label for="">Hệ số a</label>
                <input type="text" class="form-control" name="txta" value="{{ isset($a)?$a: ' '}}">

            </div>
            <div class="form-group">
                <label for="">Hệ số b</label>
                <input type="text" class="form-control" name="txtb" value="{{ isset($b)?$b: ' '}}">
            </div>
            <button type="submit" class="btn btn-primary">Giải pt</button>
            <button type="button" class="btn btn-default" onclick="window.location='{{ route('reset') }}'">reset</button>
            <button type="button" onclick="myFunction()">xóa</button>
        </form>
    </br>
        {{isset($kq)?$kq:''}}
    </div>
        <!-- <script>
            function myFunction(){
                document.getElementbyId("txta").value =" ";
                document.getElementbyId("txtb").value =" ";
                document.getElementbyId("txta").focus();

            }
        </script> -->
</body>
</html>