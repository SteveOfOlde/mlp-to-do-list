<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use App\Models\Task;

class Tasks extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render(): View
    {
        return view('livewire.tasks')->with([
            'tasks' => Task::all(),
        ]);
    }
}
