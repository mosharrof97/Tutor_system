@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-8">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Location Form</h5>
                    <small class="text-muted float-end">Bangladesh</small>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="location">Location Name</label>
                            <input type="text" class="form-control" id="location" placeholder="location">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="zip">Zip Code</label>
                            <input type="text" class="form-control" id="zip" placeholder="zip">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
