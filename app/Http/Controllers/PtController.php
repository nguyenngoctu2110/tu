<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PtController extends Controller
{
    public function giaiptb1(Request $req){
        $a=$req->txta;   //hoặc $req->input('txta');
           $b=$req->txtb;
           if($a==0)
                if($b==0)
                    $kq= 'Phương trình vô số nghiệm';
                else $kq= 'Phương trình vô nghiệm';
            else $kq= 'Phương trình có nghiệm x='.-$b/$a;
            return view ('/phuongtrinh',['a'=>$a,'b'=>$b,'kq'=>$kq]);
        

}

   public function reset(){
    $a='';
    $b='';
    $focus='1';
    return view('/phuongtrinh',compact('a','b','focus'));
}
} 