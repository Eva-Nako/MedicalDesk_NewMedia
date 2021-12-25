@extends('layouts.app')
@section('content')
<!--body--> 
<div class="lg:px-20 px-8 w-6 mt-8">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lg:w-12 lg:h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" Width="48px"
        Height="48px "
      />
      </svg>
</div>
<div class="lg:px-32 px-8">
  <h1 class="px-16 lg:px-0 lg:text-4xl md:text-4xl text-2xl font-bold font-sans h-12 mt-16 text-center lg:text-left overflow-visible" style="color: #09425A;">PRENOTA SERVIZIOIN STORE</h1>
   <p class="h-16 lg:text-2xl md:text-2xl text-xs mt-6 text-center lg:text-left lg:w-4/6" style="color: #09425A;">All’interno delle strutture e dei mezzi ParkinGO è necessario indossare la 
   mascherina e rispettare la distanza di sicurezza interpersonale.
</p>
</div>
<!-- Sesioni 01-->
<div class="contanier lg:mt-8 mt-4 lg:px-32 px-8 pt-12">
<form  method="POST">
     @csrf
  <livewire:title comments="01. Prenota ora i tamponi in Drive-in">
    <div class="cardelement h-64 sm:h-40 " style="background-color: #D0D8DA;">
         <div class="h-64 flex flex-col  md:flex-row  justify-between pr-4 pl-4 mt-8 mb-8 items-center sm:h-40 " style="background-color: #D0D8DA;">
             <div class="flex flex-row items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="37.15" height="53" fill="currentColor" class="bi bi-geo-alt-fill 2xl:ml-16" viewBox="0 0 16 16" style="color: #09425A;">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg>
                  <input type="text" class=" border-none 2xl:ml-12 ml-6 2xl:text-4xl text-xl placeholder-opacity-100" id="txtvalue" style="background-color: #D0D8DA; color: #09425A;" placeholder="ParkinGO Malpensa" disabled> </input>
             </div>
             <div class="sm:hidden flex flex-row items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="53" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16" style="color: #09425A;">
               <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
              </svg>
              <span class="inline-block text-xl ml-7" style="color: #09425A;">Mar 23 Feb 2021</span>
            </div>
            <div  class="dropdown block lg:w-auto md:w-auto pb-3 pl-40 sm:w-full text-right">
              <p class="dropbtn ml-0 sm:m-auto underline 2xl:mr-20" style="color: #09425A;">Modifica negozio</p>
              <select class="dropdown-content" id="ddselect" onchange="ddlselect()">
              
                <option value="1">ParkinGo Malpensa</option>
                <option value="1">ParkinGo Milano</option>
             </select>
            </div>
        </div>
       
 </div>
<!--Section 02 --> 

  <div class="pt-14 ">
    <livewire:title comments="02. Prenota ora i tamponi in Drive-in">
       <div class="flex items-start lg:flex-row md:flex-row flex-col sm:flex p-0s gap-5">
         <livewire:card-element02 txt="Tampone Rapido Antigenico" price="50$" selectId="selectValue" divId="active">
         <livewire:card-element02 txt="Tampone Moleculare PCR " price="90$" selectId="selectValue1" divId="active1">
        </div>
  </div>
   
 
<!-- Section 03-->
<div class="pt-12">
  <livewire:title comments="03. Scegli fra le date e orari disponibili">
    
  <h1 class="lg:mt-7 mt-5 w-16 h-9 lg:text-2xl md:text-2xl sm:text-lg lg:mb-1.5 " style="color: #09425A;">Date</h1>
    <!-- <div class="grid lg:flex grid-cols-2 lg:flex-wrap md:flex md:flex-wrap" style="grid-template-columns: 1fr 1fr"> -->
     <div class="grid grid-cols-2 gap-5 lg:grid-cols-6 xl:grid-cols-8">
        @for ($i = 0; $i < 10; $i++)
        <livewire:button-date btn="{{\Carbon\Carbon::now()->addDays($i)->toDateString()}}" btn_id="{{'date'.$i}}"/>
       @endfor
     </div>
</div>
<div class="">
    <h1 class="lg:mt-7 mt-5 w-16 h-9 lg:text-2xl md:text-2xl sm:text-lg lg:mb-1.5" style="color: #09425A;">Orari</h1>
      <!-- <div class="grid lg:flex grid-cols-2 lg:flex-wrap md:flex md:flex-wrap" style="grid-template-columns: 1fr 1fr">-->
      <div class="grid grid-cols-2 gap-5 lg:grid-cols-6 xl:grid-cols-8">
         @for ($i = 0; $i < 10; $i++)
         <livewire:buton-orar btn="{{\Carbon\Carbon::today()->subHours(4)->addHours($i)->format('g:i',strtotime('7:00'))}}" btn_id="{{'orari'.$i}}"/>
         @endfor
      </div>
</div>



<!--forma/section 04 -->
<div class="lg:pt-12 pt-7 ">
   <livewire:title comments="04. Dati anagrafici">
   
    <div class="grid grid-cols-1 gap-x-2  md:grid-cols-2 md:gab-x-2 md:gab-y-6 ">
        <div class="flex flex-col">
         <livewire:label h1Element="Nome">
         <livewire:textbox nameEl="Nome" type="text">
        </div>
       <div class="flex flex-col">
         <livewire:label h1Element="Conome">
         <livewire:textbox nameEl="Conome" type="text">
       </div>
       <div class="flex flex-col">
         <livewire:label h1Element="Email">
         <livewire:textbox nameEl="Email" type="email">
         <p class="textparagraf lg:pb-9 pb-3.5 text-sm">La conferma verrà invita a questa mail. <br> Si richiede di utilizzare la mail propria personale non mail aziendali</p>
       </div>
       <div class="flex flex-col">
          <livewire:label h1Element="Cellulare">
         <div class="flex gab-x-px lg:gab-x-1 mb-1.5">
           <select class="rounded-md py-2 w-1/4 mr-1 2xl:w-1/6 2xl:h-14 text-center" id="cellulare" name="prefix" style="border: 1px solid #0FB7B6;">
                   <option>+399</option>
                   <option>+44 20</option> 
              </select>
           <input type="number" class="rounded-md py-2 w-3/4 2xl:h-14 2xl:w-4/6 px-3" name="Cellulare" style="border: 1px solid #0FB7B6;"> 
           </div>
          <span class="text-red-500">@error('Cellulare'){{$message}}@enderror</span>
       </div>
       <div class="flex flex-col">
       <livewire:label h1Element="Nazionalita">
         <livewire:textbox nameEl="Nazionalita" type="text">
       </div>
       <div class="flex flex-col">
         <livewire:label h1Element="Code di fiscale">
         <livewire:textbox nameEl="Code_di_fiscale" type="number">
       </div>
       <div class="flex flex-col">
         <livewire:label h1Element="Data di nascita">
         <livewire:textbox nameEl="Data_di_nascita" type="date">
       </div>
       <div class="flex flex-col">
         <livewire:label h1Element="Sesso">
          <div class="flex items-center">
            <div class="flex place-items-center">
              <livewire:input-radio lblradioEl="M" radioName="Sesso">
            </div>
            <div class="flex place-items-center">
               <livewire:input-radio lblradioEl="F" radioName="Sesso">
            </div>
          </div>
          <span class="text-red-500">@error('Sesso'){{$message}}@enderror</span>
       </div>
       <div class="flex flex-col">
         <livewire:label h1Element="Comune residenca">
         <livewire:textbox nameEl="Comune_residenca" type="text">
       </div>
       <div class="flex flex-col">
         <livewire:label h1Element="Cap">
         <livewire:textbox nameEl="Cap" type="number">
       </div>
       <div class="flex flex-col">
         <livewire:label h1Element="Indirizzio">
         <livewire:textbox nameEl="Indirizzio" type="text">
       </div>
    </div>
   
   <div>
     <livewire:checkbox lblcheck="Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi) " namecheckbox="checkbox2">
     <livewire:checkbox lblcheck=" Ho preso visione dell'informativa sul tratamentto dei miei dati personali e do il consenso al loro tratamentto da parte di
                Medispa S.r.l quale unico Responsabile Esterno del tratamentto dei dati sanitari .*(leggi)" namecheckbox="checkbox1">
    </div>
   <livewire:send-button button="AVANTI">
   
</div> 

<!-- Section 05-->
<div class="">
  <livewire:title comments="05. Tipo di ricevuta">
     <p class="h-8 lg:text-2xl md:text-2xl lg:mb-11 mb-7 text-xs " style="color: #09425A;">A chi dovrà essere intestata la fattura?</p>
     
        <div class="grid grid-cols-2 mt-7 lg:flex lg:mt-11">
          <input name="receipt" type="radio" id="azienda" class="hidden" checked>
          <label class="flex justify-center px-2 mr-1 border-2 rounded-md  lg:w-48 radio-lbl hover:shadow-lg cursor-pointer" for="azienda">
             <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-6 my-auto lg:w-10 lg:h-8" viewBox="0 0 20 20" fill="currentColor">
               <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
             </svg> 
             <p class="font-bold text-sm my-5 ml-2 lg:ml-6 lg:text-base text-white">Azienda</p>
          </label>
         
            <input class="hidden" name="receipt" type="radio" id="privato">
            <label class="flex px-5 border-2 rounded-md lg:w-48 radio-lbl hover:shadow-lg cursor-pointer" for="privato">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-6 my-auto lg:w-10 lg:h-8" viewBox="0 0 20 20" fill="currentColor">
               <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg> 
              <p class="font-bold text-sm my-5 ml-2 lg:ml-6 lg:text-base text-button" >Privato</p>
            </label>
         
          </div>
        

            <!--Forma section 05 -->
    
     <div class="lg:mt-20 mt-5 ">
         <div class="grid grid-cols-1 gap-x-2  md:grid-cols-2 md:gab-x-2 md:gab-y-6 ">
            <div class="flex flex-col">
               <livewire:label h1Element="Nome">
               <livewire:textbox nameEl="Nome_user" type="text">
             </div>
           <div class="flex flex-col">
              <livewire:label h1Element="Conome">
              <livewire:textbox nameEl="Cogname_user" type="text">
           </div>
           <div class="flex flex-col">
              <livewire:label h1Element="Codice Fiscale">
              <livewire:textbox nameEl="Codice_Fiscale" type="text">
           </div>
           <div class="flex flex-col">
            <livewire:label h1Element="Email invio fattura">
            <livewire:textbox nameEl="Email_fattura" type="text">
          </div>
          <div class="flex flex-col">
            <livewire:label h1Element="Indirizzo">
            <livewire:textbox nameEl="Indirizzo" type="text">
          </div>
          <div class="flex flex-col">
            <livewire:label h1Element="Citta">
            <livewire:textbox nameEl="Citta" type="text">
         </div>
         <div class="flex flex-col">
           <livewire:label h1Element="Cap">
           <livewire:textbox nameEl="Cap" type="number">
         </div>
         <div class="flex flex-col">
           <livewire:label h1Element="Provinzia">
           <livewire:textbox nameEl="Provinzia" type="text">
         </div>
         <div class="flex flex-col">
           <livewire:label h1Element="Nazione">
           <livewire:textbox nameEl="Nazione" type="text">
       </div>
    </div>
  </div>
  <livewire:send-button button="VERIFICA">
  </form>
</div> 

<!-- section 06-->
<div class="">
   <livewire:title comments="06. Metodo di pagamento">
      <div class="flex gap-4 items-center" style="margin: 25px 0px;">
          <div class="color flex gap-4  lg:text-2xl items-center sm:text-xs">
            <div class="flex place-items-center lg:mr-16">
              <input type="radio" id="paga" name="paga" value="" class="lg:w-6 h-6"/>
              <label for="paga" class="text-poppins lg:ml-6 ml-3.5 lg:text-2xl md:text-2xl text-sm"  style="color: #09425A;" > Carta di credito </label>
           </div>
           <div class="flex gap-4">
             <img src="/img/mcard.png" alt="mastercard" class="lg:mr-8 w-6 h-6 lg:w-12 lg:h-12"> <img src="/img/visa.png" alt="visacard" class="lg:mr-7 lg:w-14 lg:h-14 w-9 h-9">
             <img src="/img/amex.png" alt="amex" class="lg:w-14 lg:h-14 w-8 h-8">
           </div>
        </div>
      </div> 
      
          <!--Forma section 06 -->
          <div class="metodo_Pagamento rounded-md p-10 lg:mb-16 mb-9" style="background: #F0F4F5; height:486px width:1403px">
             <div class="grid grid-cols-1 gap-x-28  md:grid-cols-1 md:gab-x-28 md:gab-y-6 ">
               <div class="flex flex-col">
                  <livewire:label h1Element="Provincia">
                  <input type="text" class="rounded-md  py-2 lg:mb-6 mb-3.5 sm:w-5/6 lg:w-full sm:h-16 px-3" style="border: 1px solid #0FB7B6;">
               </div>

                <div class="flex flex-col mb-8">
                  <livewire:label h1Element="Data di scandeza">
                    <div class="flex gab-x-px lg:gab-x-1">
                         <input type="date" class="rounded-md py-2 w-2/4 lg:mr-12 mr-4 sm:w-2/5 sm:h-16 lg:w-full px-3" style="border: 1px solid #0FB7B6;">
                         <input type="text" class="rounded-md py-2 w-2/4 sm:w-2/5 sm:h-16 lg:w-full px-3" style="border: 1px solid #0FB7B6;">
                     </div>
               </div>
          
                <div class="flex flex-col">
                  <livewire:label h1Element="Nome sulla carta">
                  <input type="text" class="rounded-md  py-2 lg:mb-6 mb-3.5 sm:w-5/6 sm:h-16 lg:w-full px-3" style="border: 1px solid #0FB7B6;">
                </div>
             </div>
           </div>
            
         <!--Paypal/checkbox -->
         <div class="mb-7 grid grid-cols-1 gap-y-5">
            <div class="flex space-x-6">
               <livewire:input-radio lblradioEl="PayPal" radioName="gender"> <img src="img/paypal.png" alt="paypal" class="lg:pl-9 pl-1 w-18 h-6  lg:w-20 lg:h-10">
               <label class="lg:text-2xl sm:text-xs">Che cos’e PayPal?</label> 
            </div>

              <livewire:input-radio lblradioEl="GooglePay" radioName="gender"> 
          </div>
          
     <livewire:checkbox lblcheck="Ho preso visione dell’informativa sul trattamento dei miei dati personali e i Termini e Condizioni *(leggi) " namecheckbox="checkbox3">
     <livewire:checkbox lblcheck="Ho preso visione dell’informativa sul trattamento dei miei dati personali e do il consenso al loro trattamento da parte di Medispa S.r.l. quale unico Responsabile Esterno del trattamento dei dati sanitari. * (leggi)" namecheckbox="checkbox4">
     <livewire:checkbox lblcheck="Ho preso visione dell’informativa sul trattamento dei miei dati personali e do il consenso al loro trattamento da parte di Medispa S.r.l. quale unico Responsabile Esterno del trattamento dei dati sanitari. * (leggi)" namecheckbox="checkbox5">
  
       
            <livewire:send-button button="CONFERMA E PAGA">
    </div>
    
 <!--end section 6-->
@endsection