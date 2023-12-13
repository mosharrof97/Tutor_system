@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-11">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">City Name</h5>
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
                    <form action="{{route('city.update', $city->city_id)}}" method="post">
                        @csrf
                        {{-- @method('put') --}}

                        <div class="mb-3">
                            <label class="form-label" for="city_name">City name</label>
                            <input type="text" class="form-control" id="city_name" name="city_name" value="{{$city->city_name}}">
                            @error('tuition_type')
                                <span id="" class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add City</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
