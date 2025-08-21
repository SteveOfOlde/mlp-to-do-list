<?php
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
/** @var $tasks Collection<Task> */
?>
<div>

    <div class="container-fluid">
        <div class="row">
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
                                            <button type="button" class="btn-btn-success"></button>
                                            <button type="button" class="btn-btn-success"></button>
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
