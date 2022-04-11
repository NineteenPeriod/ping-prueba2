<?php

namespace App\Http\Livewire\App;

use App\Models\App;
use Livewire\Component;

class Index extends Component
{
    
    public $apps;

    public function mount()
    {
        $this->apps = App::all();
    }

    public function render()
    {
        return view('livewire.app.index');
    }
}
