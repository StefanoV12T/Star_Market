<?php

namespace App\Http\Livewire;

use Livewire\Component;

    

class Language extends Component
{
    
    public $lang='it';


    public function render()
    {
        return view('livewire.language');
    }
    public function changeLanguage(){
        session()->put('locale',$this->lang);
        // redirect('#');
        $this->emit('paginaAggiornata');
    }

    public function setItalian(){
        $this->lang='it';
        $this->changeLanguage();
    }
    public function setEnglish(){
        $this->lang='en';
        $this->changeLanguage();
    }
    public function setSpanish(){
        $this->lang='es';
        $this->changeLanguage();
    }
}
