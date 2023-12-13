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
                    <form action="" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="sub_name">Subject name</label>
                            <input type="text" class="form-control" id="sub_name" name="sub_name" placeholder="subject name">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add Subject</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
