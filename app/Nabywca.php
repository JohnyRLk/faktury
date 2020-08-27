<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nabywca extends Model
{
    public $timestamps = false;
    public function faktura_nabywca(){
        return $this->hasMany('App\Faktura');
    }
protected $fillable = ['nabywca','nip_nabywca','miasto_nabywca','ulica_nabywca','kod_pocztowy_nabywca'];
}