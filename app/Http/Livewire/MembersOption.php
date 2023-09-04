<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MembersOption extends Component
{
    public $year;

    public function mount()
    {
        $this->year = date('Y');
    }
    public function render()
    {
        return view('livewire.members-option');
    }
    public function updatedYear()
    {
        $this->show();
    }

    public function show()
    {
        $this->emitTo('members-show', 'reloadPosts', $this->year);
        $this->emitTo('executives-member', 'reloadPosts', $this->year);
        $this->emitTo('general-member', 'reload', $this->year);
    }
}
