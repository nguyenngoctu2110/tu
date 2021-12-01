<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarInfo extends Model
{
    use HasFactory;
    protected $table='carinfo';
 protected $fillable=['quantity','color','price','car_id'];
 public function car(){
    return $this->belongsTo('App\Models\Car','car_id','id'); 

}
}