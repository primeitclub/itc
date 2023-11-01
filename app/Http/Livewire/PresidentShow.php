<?php
namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;

class PresidentShow extends Component
{
    public $president;
    protected $listeners = ['reloadPosts'];

    public function mount()
    {
        $this->president = Member::ExecutiveMember()->OrderByDesignation()->where('starting_year', date('2022'))->where('designation' ,'=', 'President' )->get(); 
    }

    public function render()
    {
        return view('livewire.president-show', ['presidents' => $this->president]);
    }

    public function reloadPosts($year)
    {
        $this->president = Member::ExecutiveMember()->OrderByDesignation()->where('starting_year', $year)->where('designation' ,'=', 'President' )->get(); 
    }

}
