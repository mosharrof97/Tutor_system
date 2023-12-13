@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-8">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Tuition Form</h5>
                    <small class="text-muted float-end">Bangladesh</small>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="tuition">Tuition ID</label>
                            <input type="text" class="form-control" id="tuition" placeholder="tuition id">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="post">Post ID</label>
                            <input type="text" class="form-control" id="post" placeholder="post">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
