@extends('dashboard.layout.layout')
@section('content')
    <div class="card mb-4">
        <div class="row justify-content-center">
            <div class=" col-11">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Location Name</h5>
                    <small class="text-muted float-end">Default label</small>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="location_name">Location Name</label>
                            <input type="text" class="form-control" id="location_name" name="location_name" placeholder="location name">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="city_name">City name</label>
                            {{-- <input type="text" class="form-control" id="category_name" name="category_name" placeholder="category name"> --}}
                            <select name="city_name" id="city_name">
                                <option value="">Select City name</option>
                                <option value="">Dhaka</option>
                                <option value="">Rangpur</option>
                                <option value="">Rajshahi</option>
                            </select>
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Add Location</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
