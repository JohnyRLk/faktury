<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faktura extends Model
{
    public $timestamps = false;

    public function nabywca(){
        return $this->belongsTo('App\Nabywca', 'nabywca_id');
    }
    public function sprzedawca(){
        return $this->belongsTo('App\Sprzedawca', 'sprzedawca_id');
        
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = ['id', 'sprzedawca_id', 'nabywca_id','typ_faktury','data_wystawienia',
        'miejsce,wystawienia','data_sprzedazy','jm','ilosc','cena_netto','wartosc_netto','stawk_vat',
        'kwota_vat','wartosc_brutto','status','sosob_platnosci','numer_konta','termin_platnosci'];
}
