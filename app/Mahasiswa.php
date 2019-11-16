<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public function prodi(){
        return $this->belongsTo('App\Prodi');
    }

    public function getCreatedAtAttribute($value){ //Accessor
        //pas select, nilainya diganti.
        $date= new DateTime($value);
        return $date->format('d/m/Y');
    }

    public function setNameAttribute($value){ //Mutator
        //pas insert nilainya diganti
    }

    //this->attributes buat ambil smua nama kolomnya.
}
