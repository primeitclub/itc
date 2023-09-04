<?php
namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;

class MembersShow extends Component
{
    public $executiveMembers;
    protected $listeners = ['reloadPosts'];

    public function mount()
    {
        $this->executiveMembers = Member::ExecutiveMember()->OrderByDesignation()->where('batch', date('Y'))->get(); 

    }

    public function render()
    {
        return view('livewire.members-show', ['executiveMembers' => $this->executiveMembers]);
    }

    public function reloadPosts($year)
    {
        $this->executiveMembers = Member::ExecutiveMember()->OrderByDesignation()->where('batch', $year)->get(); 
    }

}
