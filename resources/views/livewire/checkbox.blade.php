<div class="lg:mb-7 mb-2.5 ">
<div class="flex flex-inline items-start items-center">
      <label style="display:grid; grid-template-columns: auto 1fr; ">
          <input class="lg:h-5 lg:w-5 w-3 h-3 rounded" id="checkbox" name="{{$namecheckbox}}"  type="checkbox">
             <span class="lg:text-lg md:text-lg text-sm ml-3" style="color: #09425A;">{{$checkboxlbl}} </span>
      </label>
      
</div>  
<span class="text-red-500">@error($namecheckbox){{$message}}@enderror</span>
 </div>
