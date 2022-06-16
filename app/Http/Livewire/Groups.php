<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Groups extends Component
{
    public $groups = [];
    public $selectedGroup = [];
    public function mount()
    {
        $this->groups = DB::table('groupes')->get();
    }
    public function addGroup()
    {
        $this->selectedGroup[] = 1 ;
    }
    public function render()
    {
        return view('livewire.groups');
    }
}
