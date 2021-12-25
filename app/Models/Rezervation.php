<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Rezervation extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=[
       'location_id',
       'date_id',
       'orari_id',
       'pazientis_id',
       'ricuvetas_id',
       'quantity', 
       'price', 
       'total'
    ];

   

    
    
}
