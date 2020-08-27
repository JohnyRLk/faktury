<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sprzedawca extends Model
{
    public $timestamps = false;
    public function faktura_sprzedawca(){
        return $this->hasMany('App\Faktura');
    }
    protected $fillable = ['sprzedawca','nip_sprzedawca','miasto_sprzedawca','ulica_sprzedawca','kod_pocztowy_sprzedawca',];
}
