@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">
                    <h3>
                        Create task
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.store')}}" method="POST">
                    <div class="row">    
                        <div class="form-group col">
                            <label for="assignedUser">
                                Assigned user
                            </label>
                            <select
                                name="assignedUser"
                                id="assignedUser"
                                class="form-control mb-3"
                                required
                                >
                                <option value="">
                                </option>
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}"
                                        @if (intval(old('assignedUser'))===$user->id)
                                            selected
                                        @endif
                                        >
                                        {{$user->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="expiration_date">
                                Expiration date
                            </label>
                            <input 
                                type="date"
                                name="expiration_date"
                                id="expiration_date"
                                min="{{date('Y-m-d')}}"
                                class="form-control mb-3"
                                required
                                value="{{old('expiration_date')}}"
                                >
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="description">
                                Description
                            </label>
                            <textarea 
                                minlength="10"
                                name="description"
                                id="description"
                                class="form-control mb-3"
                                required>{{old('description')}}</textarea>
                        </div>
                        <div class="row justify-content-center">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-primary">
                                Create task
                            </button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
