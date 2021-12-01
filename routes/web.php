<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use App\Http\Controllers\PtController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/detail-car/{id}', [CarController::class, 'show']);



Route::get('/car-list',[CarController::class,'index']);




Route::get('/phuongtrinh', function(){
    return view('phuongtrinh');
});

// Route::post('/phuongtrinh',function(Request $req){
//    $a=$req->txta;   //hoặc $req->input('txta');
//    $b=$req->txtb;
//    if($a==0)
//         if($b==0)
//             $kq= 'Phương trình vô số nghiệm';
//         else $kq= 'Phương trình vô nghiệm';
//     else $kq= 'Phương trình có nghiệm x='.-$b/$a;
//     return view ('/phuongtrinh',['a'=>$a,'b'=>$b,'kq'=>$kq]);
// });

Route::post('/phuongtrinh',[PtController::class,'giaiptb1'])->name('phuongtrinh');

Route::get('/reset',[PtController::class,'reset'])->name('reset');

Route::get('/tinh', function(){
    return view('tinh');
});


 Route::post('/tinh', function (Request $req){

    function pheptinh($pt,$a,$b){

        // $a=$req->txta;  
        // $b=$req->txtb;
        // $pt=$req->$a+$b;
        // {

        if($pt=='+'){
                return ($a+$b);
            }
            else if ($pt=='-'){
                return $a-$b;
            }
            else if ($pt=='*'){
                return $a*$b;
            }
            else if ($pt=='/'){
                if($b!=0){
                return $a/$b;
            }else{
                echo 'khong the chia cho 0' ;
            }
        }
        if (isset($_POST['btnSubmit']))
        {
            $a=$_POST['txta'];
            $b=$_POST['txtb'];
            $pt=$_POST['btnSubmit'];
            if ($pt=='+'){
               $kq= pheptinh($pt,$a,$b);
                echo 'kết quả phép cộng :'.$kq;
            }
            else if ($pt=='-'){
                $kq= pheptinh($pt,$a,$b);
                 echo 'ket qua phep tru:'.$kq;
             }
             else if ($pt=='*'){
                $kq= pheptinh($pt,$a,$b);
                 echo 'kết quả phép nhân :'.$kq;
             }
             else if ($pt=='/'){
                $kq= pheptinh($pt,$a,$b);
                 echo 'ket qua phep chia:'.$kq;
             }}}
 });
    