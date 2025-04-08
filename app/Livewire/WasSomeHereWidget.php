<?php

namespace App\Livewire;

use App\Models\KeyValueStore;
use Carbon\Carbon;

use Livewire\Component;

class WasSomeHereWidget extends Component
{
    public $value = false;
    public $firstVisitTime = null;

    public function mount()
    {
        $result = KeyValueStore::where("key", "someone_here")->first();

        if ($result == null) {
            $this->value = false;
            return;
        }

        $parsedDate = Carbon::parse($result->value);

        if ($parsedDate->isBefore(Carbon::today())) {
            $this->value = false;
            return;
        }

        $this->value = true;
        $this->firstVisitTime = $parsedDate;
    }

    public function render()
    {
        return view('livewire.was-some-here-widget');
    }

    public function setValue()
    {
        if ($this->value === false) {
            $record = KeyValueStore::findOrNew('someone_here');
            $record->key = 'someone_here';
            $record->value = Carbon::now();

            $record->save();
            $this->value = true;
            $this->firstVisitTime = Carbon::now();
        }

    }
}
