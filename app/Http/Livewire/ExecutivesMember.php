<?php
namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;

class ExecutivesMember extends Component
{
    public $executiveMembers;
    protected $listeners = ['reloadPosts'];

    public function mount()
    {
        $this->executiveMembers = Member::ExecutiveMember()->OrderByDesignation()->where('batch', date('Y'))->where('designation' ,'!=' , 'President')->get(); 
    }

    public function render()
    {
        return view('livewire.executives-member', ['executiveMembers' => $this->executiveMembers]);
    }

    public function reloadPosts($year)
    {
        $this->executiveMembers = Member::ExecutiveMember()->OrderByDesignation()->where('batch', $year)->where('designation' ,'!=' , 'President')->get(); 
    }

}
