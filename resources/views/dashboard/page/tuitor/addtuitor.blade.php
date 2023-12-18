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
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('tuitordata')}}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-6">

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="tuition_id">Tuition Type </label>
                                    <select name="tuition_id" id="tuition_id " class="form-control">
                                        <option value="">Select...</option>
                                    @foreach ($tuition as $data)
                                        <option value="{{$data->tuition_id}}">{{$data->tuition_name}}</option>
                                    @endforeach
                                       
                                    </select>

                                    @error('tuition_id')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="city_id">Select City  </label>
                                    <select name="city_id" id="city_id" class="form-control">
                                        <option value="">Select...</option>
                                    @foreach ($city as $data)
                                        <option value="{{$data->city_id}}">{{$data->city_name}}</option>
                                    @endforeach
                                    </select>

                                    @error('city_id')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="location_id">Select Location  </label>
                                    <select name="location_id" id="location_id" class="form-control">
                                        <option value="">Select... </option>
                                    @foreach ($location as $data)
                                        <option value="{{$data->location_id}}">{{$data->location_name}}</option>
                                    @endforeach
                                    </select>

                                    @error('location_id')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="category">Category </label>
                                    <select name="category_id" id="category" class="form-control">
                                        <option value="">Select... </option>
                                    @foreach ($category as $data)
                                        <option value="{{$data->category_id}}">{{$data->category_name}}</option>
                                    @endforeach
                                    </select>

                                    @error('category_id')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="class_id">Class / Course </label>
                                    <select name="class_id" id="class_id" class="form-control">
                                        <option value="">Select... </option>
                                    @foreach ($class as $data)
                                        <option value="{{$data->class_id}}">{{$data->class_name}}</option>
                                    @endforeach
                                    </select>

                                    @error('class_id')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="subject_id">Required Subjects</label>
                                    <select name="subject_id" id="subject_id" class="form-control">
                                        <option value="">Select... </option>
                                    @foreach ($subject as $data)
                                        <option value="{{$data->subject_id}}">{{$data->subject_name}}</option>
                                    @endforeach
                                    </select>

                                    @error('subject_id')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="student_gender">Student Gender</label>
                                    <select name="student_gender" id="student_gender" class="form-control">
                                        <option value="">Select... </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>

                                    @error('student_gender')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="tuitor_gender">Tuitor Gender Preference</label>
                                    <select name="tuitor_gender" id="tuitor_gender" class="form-control">
                                        <option value="">Select... </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Any">Any</option>
                                    </select>

                                    @error('tuitor_gender')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="address" class="control-label fg-lable">Address Details </label>
                                    <textarea name="address" id="address" class="form-control fg-textarea" placeholder="E.g: Flat: Level: 2, Rangs Naharz, House: 14, Road: Shahjalal Avenue, Sector 4, Uttara, Dhaka 1230" style="height: 120px;">
                                    </textarea>

                                    @error('address')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            
                            <div class="col-6">

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="institute_name">Institute Name</label>
                                    <input type="text" class="form-control" id="institute_name" name="institute_name"
                                        placeholder="Institute Name">

                                        @error('institute_name')
                                            <span id="" class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="student_id">Number of Students  </label>
                                    <select name="student_id" id="student_id" class="form-control">
                                        <option value="">Select...</option>
                                    @foreach ($student as $data)
                                        <option value="{{$data->student_id}}">{{$data->nb_of_student}}</option>
                                    @endforeach
                                    </select>

                                    @error('student_id')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="day_id">Days / Week </label>
                                    <select name="day_id" id="day_id" class="form-control">
                                        <option value="">Select...</option>
                                    @foreach ($day as $data)
                                        <option value="{{$data->day_id}}">{{$data->day_name}}</option>
                                    @endforeach
                                    </select>

                                    @error('day_id')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="tuition_time">Tuitoin Time</label>
                                    <input type="time" class="form-control" id="tuition_time" name="tuition_time"
                                        placeholder="Tuition Time">

                                        @error('tuition_time')
                                            <span id="" class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="hire_date">Hire Date </label>
                                    <input type="date" class="form-control" id="hire_date" name="hire_date"
                                        placeholder="dd/mm/yyyy">

                                        @error('hire_date')
                                            <span id="" class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="salary">Salary (BDT) </label>
                                    <input type="text" class="form-control" id="salary" name="salary"
                                        placeholder="Salary in BDT ">

                                        @error('salary')
                                            <span id="" class="form-text text-danger">{{ $message }}</span>
                                        @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label class="control-label fg-lable" for="social_id">How did you hear about us?</label>
                                    <select name="social_id" id="social_id" class="form-control">
                                        <option value="">Select... </option>
                                    @foreach ($social as $data)
                                        <option value="{{$data->social_id}}">{{$data->social_name}}</option>
                                    @endforeach
                                    </select>
                                    @error('social_id')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="more_about" class="control-label fg-lable">More about your requirement </label>
                                    <textarea name="more_about" id="more_about" class="form-control fg-textarea" placeholder="E.g: Flat: Level: 2, Rangs Naharz, House: 14, Road: Shahjalal Avenue, Sector 4, Uttara, Dhaka 1230" style="height: 120px;">
                                    </textarea>

                                    @error('more_about')
                                        <span id="" class="form-text text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Location</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    {{-- <script type="text/javascript">
        $("document").ready(function () {
            $('select[name="category_id"]').on('change', function () {
                var catId = $(this).val();
                if (catId) {
                    $.ajax({
                        url: '{{ route("childOption") }}',
                        type: "get",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="class_name"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="class_name"]').append('<option value=" ' + key + '">' + value + '</option>');
                            })
                        }
                    })
                } else {
                    $('select[name="class_name"]').empty();
                }
            });
        });
    </script> --}}
    
@endsection
