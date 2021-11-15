<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="https://kit.fontawesome.com/c64e13edfb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.css" />
    
    @livewireStyles
</head>
<body>
     <!--navbar --> 
       <nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-gray-800 mb-3 2xl:h-36">
           <div class="container px-4 sm:mx-auto 2xl:mx-20 flex sm:flex-wrap items-center justify-between">
               <div class=" relative flex justify-between  px-4 lg:static lg:block lg:my-2 lg:px-2 lg:w-1/4 xl:my-2 xl:px-1 xl:w-1/4">
                  <img src="img/imgMedical.png" alt="MedicalDesk"  class="imgMedical w-20 h-7 lg:w-40 2xl:w-44 2xl:h-16">
              </div>
             <!--Select List-->
              <div class="self-center lg:p-3 p-3 lg:my-2 lg:px-2 lg:-mr-20">
                    <select class="w-6 h-6 lg:w-48 lg:h-11 2xl:w-48 2xl:h-11 2xl:text-2xl px-10" id="id_select2_example">
                        <option data-img_src="https://upload.wikimedia.org/wikipedia/commons/0/03/Flag_of_Italy.svg" ><span class="hidden">Italiano</span></option>
                        <option data-img_src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg"><span class="hidden"></span>english</option>
                    </select>
              </div> 
         </div>
     </nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.js"></script>
<script type="text/javascript" src="{{ asset('js/flag.js') }}"></script>


 <div class="bodysection">
    @yield('content')

</div>


@include('partial.footer')


</body>
</html>