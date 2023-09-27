<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class ShowEvent extends Component
{
    public $completedEvents;
    public $selectedYear;
    public $selectedMonth;

    protected $listeners = ['reloadPosts'];

    public function mount()
    {
        $this->selectedYear = date('Y');
        $this->selectedMonth = date('m');
        $this->loadCompletedEvents();
    }

    public function render()
    {
        return view('livewire.show-event', [
            'completedEvents' => $this->completedEvents,
        ]);
    }

    public function reloadPosts($year, $month)
    {
        $this->selectedYear = $year;
        $this->selectedMonth = $month;
        $this->loadCompletedEvents();
    }

    private function loadCompletedEvents()
    {
 
        $this->completedEvents = Event::completed()
            ->with(['eventCategory', 'speakers'])
            ->whereYear('event_date', $this->selectedYear)
            ->whereMonth('event_date', $this->selectedMonth)
            ->latest()
            ->get();

        if ($this->completedEvents->isEmpty()) {
            $this->completedEvents = Event::completed()
                ->with(['eventCategory', 'speakers'])
                ->latest()
                ->get();
        }
    }
}
