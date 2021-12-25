<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Checkbox;
use App\Models\Pazienti;
use App\Models\Ricuveta;
use App\Models\Location;
use App\Models\Rezervation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{

    public function index(){
      
        return view("welcome");
    }
    public function store(Request $request){
        $this->validate($request, [
        'Nome' => 'required',
        'Conome' => 'required',
        'Email' => 'required|email',
        'Cellulare' => 'required',
        'Nazionalita'=> 'required',
        'Code_di_fiscale' => 'required',
        'Data_di_nascita' => 'required|date',
        'Sesso'=>'required',
        'Comune_residenca' => 'required',
        'Cap' =>'required',
        'Indirizzio'=> 'required',
        'checkbox1'=>'required',
        'checkbox2'=>'required',
        // 'checkbox3'=>'required',
        // 'checkbox4'=>'required',
        // 'checkbox5'=>'required',
        'Nome_user'=>'required',
        'Cogname_user'=>'required',
        'Email_fattura'=>'required',
        'Citta'=>'required',
        'Codice_Fiscale'=>'required',
        'Provinzia'=>'required',
        'Cap'=>'required',
        'Indirizzo'=>'required',
        'Nazione'=>'required',

    ]);

    Pazienti::create([
        'Nome' => $request->Nome,
        'Conome' => $request->Conome,
        'Email' => $request->Email,
        'Cellulare' => $request->Cellulare,
        'Nazionalita' => $request->Nazionalita,
        'Code_di_fiscale' => $request->Code_di_fiscale,
        'Data_di_nascita' => $request->Data_di_nascita,
        'Sesso' => $request->Sesso,
        'Comune_residenca' => $request->Comune_residenca,
        'Cap' => $request->Cap,
        'Indirizzio' => $request->Indirizzio,
    ]);
    
    Ricuveta::create([
        'Nome_user' => $request->Nome_user,
        'Cogname_user' => $request->Cogname_user,
        'Email_fattura' => $request->Email_fattura,
        'Citta' => $request->Citta,
        'Codice_Fiscale' => $request->Codice_Fiscale,
        'Provinzia' => $request->Provinzia,
        'Cap' => $request->Cap,
        'Indirizzo' => $request->Indirizzo,
        'Nazione' => $request->Nazione,
        
    ]);

    $location_id=Location::first();
    $pazienti_id=Pazienti::first();
    $ricevuta_id=Ricuveta::first();
    $price=50;
    
    Rezervation::create([
        'location_id'=>$location_id->id,
        'pazientis_id'=>$pazienti_id->id,
        'ricuvetas_id'=>$ricevuta_id->id,
        'quantity' => $request->get('quantity'),
        'price' => $request->get('price'),
        //'total' =>$request->quantity * price,

    ]);
    

    return redirect()->back();
 }
   
}
