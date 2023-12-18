@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-11">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Subject Name</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('subjectdata')}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="subject_name">Subject name</label>
                            <input type="text" class="form-control" id="subject_name" name="subject_name" placeholder="subject name">
                            @error('subject_name')
                                <span id="" class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="class_id">Class Name</label>
                            <select name="class_id" id="class_id" class="form-control" >
                                <option value="">Select Class Name</option>
                            @foreach ( $class as $data )
                                <option value="{{$data->class_id}}">{{$data->class_name}}</option>
                            @endforeach
                                
                            </select>
                            
                            @error('class_id')
                                <span id="" class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add Subject</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
