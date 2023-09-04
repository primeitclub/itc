<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;

class GeneralMember extends Component
{
    public $generalMembers;
    protected $listeners = ['reload'];

    public function mount()
    {
        $this->generalMembers = Member::GeneralMember()->where('batch',date('Y'))->orderBy('name')->get();
    }

    public function render()
    {
        return view('livewire.general-member', ['generalMembers' => $this->generalMembers]);
    }

    public function reload($year)
    {
        $this->generalMembers =  Member::GeneralMember()->where('batch', $year)->orderBy('name')->get();
    }
}
