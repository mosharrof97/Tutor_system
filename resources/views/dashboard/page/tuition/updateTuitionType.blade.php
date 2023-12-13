@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-11">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Tuition Type</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('tuition.update', $tuition->tuition_id)}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="tuition_type">Tuition Type</label>
                            <input type="text" class="form-control" id="tuition_type" name="tuition_type" value="{{$tuition->tuition_name}}">
                            @error('tuition_type')
                                <span id="" class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
