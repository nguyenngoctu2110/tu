<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Mf extends Model
{
    
    protected $table='mfs';
    protected $fillable=['mf_name'];
    public function cars(){
        return $this->hasMany('App\Models\Car','mf_id','id');
    }
}
