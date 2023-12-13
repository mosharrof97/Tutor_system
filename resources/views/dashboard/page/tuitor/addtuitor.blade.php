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

                        <div class="row">
                            <div class="col-6">

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="city_name">Tuition Type </label>
                                    <select name="city_name" id="city_name " class="form-control">
                                        <option value="">Select...</option>
                                        <option value="">Dhaka</option>
                                        <option value="">Rangpur</option>
                                        <option value="">Rajshahi</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="city_name">Select City  </label>
                                    <select name="city_name" id="city_name" class="form-control">
                                        <option value="">Select...</option>
                                        <option value="">Dhaka</option>
                                        <option value="">Rangpur</option>
                                        <option value="">Rajshahi</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="city_name">Select Location  </label>
                                    <select name="city_name" id="city_name" class="form-control">
                                        <option value="">Select... </option>
                                        <option value="">Dhaka</option>
                                        <option value="">Rangpur</option>
                                        <option value="">Rajshahi</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="city_name">Category </label>
                                    <select name="city_name" id="city_name" class="form-control">
                                        <option value="">Select... </option>
                                        <option value="">Dhaka</option>
                                        <option value="">Rangpur</option>
                                        <option value="">Rajshahi</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="city_name">Class / Course </label>
                                    <select name="city_name" id="city_name" class="form-control">
                                        <option value="">Select... </option>
                                        <option value="">Dhaka</option>
                                        <option value="">Rangpur</option>
                                        <option value="">Rajshahi</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="city_name">Required Subjects</label>
                                    <select name="city_name" id="city_name" class="form-control">
                                        <option value="">Select... </option>
                                        <option value="">Dhaka</option>
                                        <option value="">Rangpur</option>
                                        <option value="">Rajshahi</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="city_name">Student Gender</label>
                                    <select name="city_name" id="city_name" class="form-control">
                                        <option value="">Select... </option>
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="city_name">Tutor Gender Preference</label>
                                    <select name="city_name" id="city_name" class="form-control">
                                        <option value="">Select... </option>
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                        <option value="">Any</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="address" class="control-label fg-lable">Address Details </label>
                                    <textarea name="address" id="address" class="form-control fg-textarea" placeholder="E.g: Flat: Level: 2, Rangs Naharz, House: 14, Road: Shahjalal Avenue, Sector 4, Uttara, Dhaka 1230" style="height: 120px;">
                                    </textarea>
                                </div>

                            </div>
                            
                            <div class="col-6">

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="institute_name">Institute Name</label>
                                    <input type="text" class="form-control" id="institute_name" name="institute_name"
                                        placeholder="Institute Name">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="nb_of_student">Number of Students  </label>
                                    <select name="nb_of_student" id="nb_of_student" class="form-control">
                                        <option value="">Select...</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="day_week">Days / Week </label>
                                    <select name="day_week" id="day_week" class="form-control">
                                        <option value="">Select...</option>
                                        <option value="">4day/week</option>
                                        <option value="">2 day/Week</option>
                                        <option value="">3 day/Week</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="tutoring_time">Tutoring Time</label>
                                    <input type="time" class="form-control" id="tutoring_time" name="tutoring_time"
                                        placeholder="Tutoring Time">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="hire_date">Hire Date </label>
                                    <input type="date" class="form-control" id="hire_date" name="hire_date"
                                        placeholder="dd/mm/yyyy">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="salary">Salary (BDT) </label>
                                    <input type="date" class="form-control" id="salary" name="salary"
                                        placeholder="Salary in BDT ">
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="social_name">How did you hear about us?</label>
                                    <select name="social_name" id="social_name" class="form-control">
                                        <option value="">Select... </option>
                                        <option value="">Facebook</option>
                                        <option value="">Linkdin</option>
                                        <option value="">Whatsapp</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="more_about" class="control-label fg-lable">More about your requirement </label>
                                    <textarea name="more_about" id="more_about" class="form-control fg-textarea" placeholder="E.g: Flat: Level: 2, Rangs Naharz, House: 14, Road: Shahjalal Avenue, Sector 4, Uttara, Dhaka 1230" style="height: 120px;">
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Location</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
