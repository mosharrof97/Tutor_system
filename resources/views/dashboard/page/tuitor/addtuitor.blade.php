@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-8">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add Tuitor Form</h5>
                    <small class="text-muted float-end">Bangladesh</small>
                </div>

                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="tuitorid">Tuitor ID</label>
                            <input type="text" class="form-control" id="tuitorid" placeholder="tuitor id">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tuitorname">Name</label>
                            <input type="text" class="form-control" id="tuitorname" placeholder="tuitor name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tuitorgender">Gender</label>
                            <input type="text" class="form-control" id="tuitorgender" placeholder="tuitor gender">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tuitoraddress">Address</label>
                            <input type="text" class="form-control" id="tuitoraddress" placeholder="tuitor address">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="education">Education</label>
                            <input type="text" class="form-control" id="education" placeholder="education">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="institute">Institute Name</label>
                            <input type="text" class="form-control" id="institute" placeholder="institute name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="salary">Salary</label>
                            <input type="text" class="form-control" id="salary" placeholder="salary">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="about">About</label>
                            <input type="text" class="form-control" id="about" placeholder="about">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
