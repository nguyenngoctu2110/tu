<?php

namespace App\Models;
use App\Models\CarController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table='cars';
    protected $fillable=['description','model','produced_on','image'];
    public function mf(){
        return $this->belongsTo('App\Models\Mf','mf_id','id');
    }

    public function carinfo(){
        return $this->hasOne('App\Models\CarInfo','car_id','id');

}}