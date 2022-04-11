<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class AppForm extends Component
{
    public $showForm = false;

    public function mount()
    {
        $this->showForm = false;
    }

    public function showForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function render()
    {
        return view('livewire.dashboard.app-form');
    }
}
