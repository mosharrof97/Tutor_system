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
                    <form action="{{route('class.update', $class->class_id)}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="student_type">Student Class Type</label>
                            <input type="text" class="form-control" id="student_type" name="class_name" value="{{$class->class_name}}">
                            @error('class_name')
                                <span id="" class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="category_id">Category name</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Select Category name</option>
                                @foreach ($category as  $data)
                                <option value="{{$data->category_id}}" {{$class->class_id == $data->category_id ? 'selected' : ''}}>{{$data->category_name}}</option>
                                @endforeach
                            </select>

                            @error('category_id')
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
