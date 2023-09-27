<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;

class GeneralMember extends Component
{
    public $generalMembers;
    public $year;
    protected $listeners = ['reloadPosts'];

    public function mount()
    {
        $this->generalMembers = Member::GeneralMember()->where('starting_year',date('Y'))->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.general-member')->with(['generalMembers' => $this->generalMembers]);
    }

    public function reloadPosts($year)
    {
        $this->generalMembers =  Member::GeneralMember()->where('starting_year', $year)->orderBy('name')->get();
    }
}
