@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">
                    <h4>
                        Details task
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col">
                            <h4>
                                Task id:
                            </h4>
                        </div>
                        <div class="col">
                            <p>
                                {{$task->id}}
                            </p>
                        </div>
                        <div class="col">
                            <h4>
                                Deadline:
                            </h4>
                        </div>
                        <div class="col">
                            <p>
                                {{$task->expiration_date}}
                            </p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <h4>
                                Assigned user:
                            </h4>
                        </div>
                        <div class="col">
                            <p>
                                {{$task->user->name}}
                            </p>
                        </div>
                        <div class="col">
                            <h4>
                                State:
                            </h4>
                        </div>
                        <div class="col">
                            <p>
                                {{$task->state}}
                            </p>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <h4>
                                Description:
                            </h4>
                            <p>
                                {{$task->description}}
                            </p>
                        </div>
                    </div>
                    <div class="row mb-4 mb-4 mt-4">
                        <div class="col">
                            <a href="{{ route('logs.index',['task_id'=> $task->id]) }}" class="btn btn-info float-right">
                                All logs
                            </a>
                        </div>
                        <div class="col">
                            <a href="{{route('logs.create',['task_id'=> $task->id])}}" class="btn btn-primary float-left">
                                Create logs
                            </a>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
