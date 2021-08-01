@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">
                        List of tasks
                    </h2>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a class="btn btn-primary float-right mb-3" href="{{ route('tasks.create') }}">
                            Create task
                        </a>
                    </div>
                    <table id="listTasks" class="table">
                        <thead>
                            <tr>
                                <th class="col-2 text-center">
                                    ID Task
                                </th>
                                <th class="col-3 text-center">
                                    Description
                                </th>
                                <th class="col-3 text-center">
                                    Assigned user
                                </th>
                                <th class="col-3 text-center">
                                    deadline
                                </th>
                                <th colspan="1"> &nbsp </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr
                                @if (date('Y-m-d') > $task->expiration_date)
                                    class="bg-danger"
                                @endif
                                >
                                    <td class="text-center">{{ $task->id }}</td>
                                    <td class="text-center">{{ $task->get_excerpt_description }}...</td>
                                    <td class="text-center">{{ $task->user->name }}</td>
                                    <td class="text-center">{{ $task->expiration_date }}</td>
                                    @if ($task->user_id === auth()->user()->id)
                                        <td class="text-center">
                                            <a href="{{ route('tasks.show',$task) }}" class="btn btn-info">
                                                Details
                                            </a>
                                        </td>
                                    @endif

                                </tr>    
                            @endforeach
                        </tbody>
                    </table>
                    <div class="float-right">
                        {{ $tasks->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
