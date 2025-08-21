<?php
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
/** @var $tasks Collection<Task> */
?>
<div>

    <div class="container-fluid tasks">
        <div class="row">
            <div class="col-6">
                <form wire:submit="save">
                    <input type="text" wire:model="title" class="form-control" placeholder="Insert Task Name">

                    <button type="submit" class="btn btn-primary btn-block">Add</button>
                </form>
            </div>
            <div class="col-6">
                @isset($tasks)
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $key=>$task)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>
                                        @if($task->completed)
                                            <span class="completed">{{ $task->title }}</span>
                                        @else
                                            {{ $task->title }}
                                        @endif

                                    </td>
                                    <td>
                                        @if(!$task->completed)
                                            <button type="button" class="btn btn-success"
                                                    wire:click="complete({{ $task->id }})">
                                                <i class="bi bi-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger"
                                                    wire:click="delete({{ $task->id }})"
                                                    wire:confirm="Are you sure you want to delete this task?">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endisset
            </div>
        </div>
    </div>


</div>
