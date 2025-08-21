<?php
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
/** @var $tasks Collection<Task> */
?>
<div>
    @isset($tasks)
        @foreach ($tasks as $task)
            <p>Task : {{ $task->title }}</p>
        @endforeach
    @endisset
</div>
