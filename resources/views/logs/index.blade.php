@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        List of logs
                    </h2>
                </div>
                <div class="card-body">
                    <div>
                        <a class="btn btn-primary float-right mb-3" href="{{ route('logs.create',['task_id'=> $task->id]) }}">
                            Create Log
                        </a>
                    </div>
                    <table id="listTasks" class="table">
                        <thead>
                            <tr>
                                <th class="col-2 text-center">
                                    ID Log
                                </th>
                                <th class="col-3 text-center">
                                    ID Task
                                </th>
                                <th class="col-3 text-center">
                                    Comment
                                </th>
                                <th class="col-3 text-center">
                                    Created at
                                </th>
                                <th colspan="2"> &nbsp </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($task->logs as $log)
                                <tr>
                                    <td class="text-center">{{ $log->id }}</td>
                                    <td class="text-center">{{ $log->task_id }}</td>
                                    <td class="text-center">{{ $log->comment }}</td>
                                    <td class="text-center">{{ $log->created_at }}</td>
                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
