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
                                    <td>{{ $task->title }}</td>
                                    <td>
                                        @if(!$task->completed)
                                            <button type="button" class="btn btn-success">
                                                <i class="bi bi-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
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
