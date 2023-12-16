@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-11">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Number Of Student </h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('student.update', $student->student_id)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label class="form-label" for="nb_of_student ">Number Of Student</label>
                            <input type="text" class="form-control" id="nb_of_student " name="student" value="{{$student->nb_of_student}}">

                            @error('student')
                                <span id="" class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
