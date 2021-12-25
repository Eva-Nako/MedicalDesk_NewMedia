<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ricuveta extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'Nome_user',
        'Cogname_user',
        'Email_fattura',
        'Citta',
        'Codice_Fiscale',
        'Provinzia',
        'Cap',
        'Indirizzo',
        'Nazione',
      ];

      public function rezervation(){
        return $this->hasMany('App/Model/Rezervation');
    }
}
