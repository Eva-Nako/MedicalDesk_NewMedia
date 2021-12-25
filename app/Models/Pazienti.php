<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pazienti extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'Nome',
        'Conome',
        'Email',
        'Cellulare',
        'Nazionalita',
        'Code_di_fiscale',
        'Data_di_nascita',
        'Sesso',
        'Comune_residenca',
        'Cap',
        'Indirizzio'
    ];

      
}
