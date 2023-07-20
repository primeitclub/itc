<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use Carbon\Carbon;

class FilterEvent extends Component
{
    public $year;
    public $month;

    public function mount()
    {
        $this->year = Carbon::now()->year;
        $this->month = Carbon::now()->format('m');
    }

    public function render()
    {
        return view('livewire.filter-event');
    }

    public function updatedYear()
    {
        $this->show();
    }

    public function updatedMonth()
    {
        $this->show();
    }

    public function show()
    {
        $this->emitTo('show-event', 'reloadPosts', $this->year, $this->month);
    }
}
