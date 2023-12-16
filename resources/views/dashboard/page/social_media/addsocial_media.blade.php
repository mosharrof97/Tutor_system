@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-11">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Social Media  Name</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('socialdata')}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="social_name">Social Media name</label>
                            <input type="text" class="form-control" id="social_name" name="social_name" placeholder="Social Media name">
                            @error('social_name')
                                <span id="" class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add Social Media </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
