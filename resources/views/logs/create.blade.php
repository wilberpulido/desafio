@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">
                    <h3>
                        Create log
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('logs.store')}}" method="POST">
                        <div class="form-group">
                            <label for="comment">
                                Comment
                            </label>
                            <textarea 
                                minlength="10"
                                name="comment"
                                id="comment"
                                class="form-control mb-3"
                                required>{{old('comment')}}</textarea>
                        </div>
                        <input value="{{$taskId}}" type="number" name="task_id" id="task_id" style="display: none">
                        <div class="row justify-content-center">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">
                                Create Logs
                            </button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
