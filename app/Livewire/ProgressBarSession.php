<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;

class ProgressBarSession extends Component
{
    public $percentual;
    public $quantidade;
    public $countBar;

    public function mount(){
        //$this->exec();
    }

    public function exec(){
        for($i=0; $i<$this->percentual; $i++){
            $this->countBar++;
            sleep(1);
            //Log::info("CountBar: " . $this->countBar);
        }
    }

    public function render()
    {
        return view('livewire.progress-bar-session');
    }
}
