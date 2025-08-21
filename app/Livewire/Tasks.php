<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use App\Models\Task;

class Tasks extends Component
{
    public string $title = '';

    public function save()
    {
        Task::create(
            $this->only(['title'])
        );

        session()->flash('status', 'Task created!');
    }

    public function complete($id): void
    {
        $task = Task::findOrFail($id);
        $task->completed = true;
        $task->save();
    }

    public function delete($id): void
    {
        $task = Task::findOrFail($id);
        $task->delete();
    }

    public function render(): View
    {
        return view('livewire.tasks')->with([
            'tasks' => Task::all(),
        ]);
    }
}
