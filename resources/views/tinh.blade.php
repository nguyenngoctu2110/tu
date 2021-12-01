<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>tính</title>
</head>
<body>
	<div class="container">
        <form action="" method="POST" role="form">
            @csrf
          <h1>  <legend style="color:blue ;">Tính toán cộng trừ nhân chia</legend></h1>
            <div class="form-group">
             <h3>   <label for="">Mời bạn nhập số a </label></h3>
                <input type="text"  name="txta" value="{{ isset($a)?$a: ' '}}">

            </div>
            <div class="form-group">
            <h3>  <label for="">Mời bạn nhập số b</label></h3>
                <input type="text"  name="txtb" value="{{ isset($b)?$b: ' '}}">
            </div>
            <br>
            <input type="submit" value="+" name="btnSubmit"/>
            <input type="submit" value="-" name="btnSubmit"/>
            <input type="submit" value="*" name="btnSubmit"/>
            <input type="submit" value="/" name="btnSubmit"/>
         <!-- <button type="button" class="btn btn-default" onclick="window.location='{{ route('reset') }}'">reset</button>  -->
        </form>
        <br>
     
    <!-- <?php
    // function pheptinh($pt,$a,$b){

    
    // if($pt=='+'){
    //         return $a+$b;
    //     }
    //     else if ($pt=='-'){
    //         return $a-$b;
    //     }
    //     else if ($pt=='*'){
    //         return $a*$b;
    //     }
    //     else if ($pt=='/'){
    //         if($b!=0){
    //         return $a/$b;
    //     }else{
    //         echo 'khong the chia cho 0' ;
    //     }
    // }
    // if (isset($_POST['btnSubmit']))
    // {
    //     $a=$_POST['txta'];
    //     $b=$_POST['txtb'];
    //     $pt=$_POST['btnSubmit'];
    //     if ($pt=='+'){
    //        $kq= pheptinh($pt,$a,$b);
    //         echo 'ket qua phep cong:'.$kq;
    //     }
    //     else if ($pt=='-'){
    //         $kq= pheptinh($pt,$a,$b);
    //          echo 'ket qua phep tru:'.$kq;
    //      }
    //      else if ($pt=='*'){
    //         $kq= pheptinh($pt,$a,$b);
    //          echo 'ket qua phep nhan:'.$kq;
    //      }
    //      else if ($pt=='/'){
    //         $kq= pheptinh($pt,$a,$b);
    //          echo 'ket qua phep chia:'.$kq;
    //      }}}
?>  -->
    <!-- {{isset($kq)?$kq:''}} -->
    </div>
</body>
</html>