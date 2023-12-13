@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-8">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Day Form</h5>
                    <small class="text-muted float-end">Bangladesh</small>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="day">Day</label>
                            <input type="text" class="form-control" id="day" placeholder="day">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="availability">Availability</label>
                            <input type="text" class="form-control" id="availability" placeholder="availability">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
