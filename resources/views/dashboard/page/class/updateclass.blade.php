@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-11">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Class Type</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('studentclass.update', $studentclass->student_id)}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="student_type">Student Class Type</label>
                            <input type="text" class="form-control" id="student_type" name="student_type" value="{{$studentclass->student_name}}">
                            @error('student_type')
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
