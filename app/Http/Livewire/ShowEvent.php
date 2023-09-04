<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;
use Illuminate\Queue\Listener;
use Illuminate\Support\Facades\Date;

class ShowEvent extends Component
{
    public $completedEvents;

    protected $listeners = ['reloadPosts'];

    public function mount()
    {
        $this->completedEvents = Event::completed()->with(['eventCategory', 'speakers'])->whereMonth('event_date', date('m'))->latest()->get();
    }

    public function render()
    {
        return view('livewire.show-event', [
            'completedEvents' => $this->completedEvents,
        ]);
    }


    public function reloadPosts($year, $month)
    {       
        $eventsQuery = Event::completed()->with(['eventCategory', 'speakers']);

        if ($year) {
            $eventsQuery = $eventsQuery->whereYear('event_date', $year);
        }

        if ($month) {
            $eventsQuery = $eventsQuery->whereMonth('event_date', $month);
        }

        $this->completedEvents = $eventsQuery->latest()->get();
        if ($this->completedEvents->isEmpty()) {
            $this->completedEvents = Event::completed()->with(['eventCategory', 'speakers'])->get();
        }
    }
}