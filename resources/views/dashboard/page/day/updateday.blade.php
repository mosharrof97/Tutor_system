@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-11">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">day Name</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @elseif (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    <form action="{{route('day.update', $day->day_id)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label class="form-label" for="day_name">Day name</label>
                            <input type="text" class="form-control" id="day_name" name="day_name" value="{{$day->day_name}}">
                            @error('day_name')
                                <span id="" class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add Day</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
