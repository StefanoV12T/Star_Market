
      <form  wire:submit.prevent="changeLanguage">
<li class="nav-item">
    <button class="btn d-flex text-white nav-link" type="submit" wire:click="setItalian()">
        <img class="img-fluid" src="{{asset('vendor/blade-flags/language-' .'it' . '.svg')}}" width="32" height="32">  <span class="mx-2">Italiano</span>
    </button>
</li > 

<li class="nav-item">
    <button class="btn d-flex text-white nav-link" type="submit" wire:click="setEnglish()">
        <img class="img-fluid" src="{{asset('vendor/blade-flags/language-' .'en' . '.svg')}}" width="32" height="32">  <span class="mx-2">English</span>
    </button>
</li>
<li class="nav-item">
    <button class="btn d-flex text-white nav-link" type="submit" wire:click="setSpanish()">
        <img class="img-fluid" src="{{asset('vendor/blade-flags/language-' .'es' . '.svg')}}" width="32" height="32">  <span class="mx-2">Espaniol</span>
    </button>
</li>
</form>




{{-- test livewire cambiolingua --}}
{{-- 
    <div>
        <form  wire:submit.prevent="changeLanguage">
            <div class="col-3 form-check text-white">
                        
                <h3 class="neonText2 recall">{{__('ui.smile')}}</h3>
                
                <input  type="radio" name="italian" value='it' wire:model="lang" id="lang">
                <label for="darvader">Italiano <img src="{{asset('vendor/blade-flags/language-' .'it' . '.svg')}}"></label>
                <br>
                <input  type="radio" name="english" value='en'  wire:model="lang" id="lang2">
                <label for="english">English</label>
                <br>
                <input  type="radio" name="spanish" value='es'  wire:model="lang" id="lang3">
                <label for="spanish">Espaniol</label>
                @error('smile') <span class="btn btn-danger">{{$message}}</span>@enderror

                
            </div>
            <div class="mt-3">
                <button class="btn btn-warning" type="submit" onclick="refreshPage()">{{__('ui.publish')}}</button>
            </div>
        </form>
    </div> --}}
