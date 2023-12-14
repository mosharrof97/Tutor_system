@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-11">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Category Type </h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{route('categorydata')}}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="category_name">Category Type</label>
                            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="category name">
                            @error('category_type')
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
