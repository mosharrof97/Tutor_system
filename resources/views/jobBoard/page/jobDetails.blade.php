@extends('jobBoard.layout.layout')
@section('content')
<!------------------- Please Change Me Here ---------------------->

<div class="p-0" >
    <div class="row g-3">
        <!-- Repeat the following card structure for each item -->
        <div class="col-lg-12">
            <div class="shadow card h-100">
                <div class="card-body p-4">
                    <h4 class="card-title font-weight-bold">Need {{$tuitor->category_id}} Tutor For {{$tuitor->class_id}} Student - {{$tuitor->day_id}}</h4>
                    <p class="mt-3 mb-2 text-sm text-muted">
                        <span>JobId: <b>{{$tuitor->tuitor_id}}</b></span> |
                        <span>Posted Date: <b>{{$tuitor->created_at}}</b></span>
                    </p>

                    <div class=" mt-2 row">
                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-book text-primary me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Tuition Type</h6>
                                <span class="text-xs">{{$tuitor->tuition_id}}</span>
                            </div>
                        </div>

                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-person text-secondary me-1"></i>
                            <div>
                                <h6 class="text-sm">Student Gender</h6>
                                <span class="text-xs">{{$tuitor->student_gender}}</span>
                            </div>
                        </div>

                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-person text-secondary me-1"></i>
                            <div>
                                <h6 class="text-sm">Preferred Tutor</h6>
                                <span class="text-xs">{{$tuitor->tuitor_gender}}</span>
                            </div>
                        </div>
                    </div>

                    <div class=" mt-2 row">
                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-book text-primary me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Tutoring Time</h6>
                                <span class="text-xs">{{$tuitor->tuition_time}}</span>
                            </div>
                        </div>

                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-person text-secondary me-1"></i>
                            <div>
                                <h6 class="text-sm">Tutoring Days</h6>
                                <span class="text-xs"> {{$tuitor->day_id}}</span>
                            </div>
                        </div>

                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-person text-secondary me-1"></i>
                            <div>
                                <h6 class="text-sm">Number of Students</h6>
                                <span class="text-xs">{{$tuitor->student_id}} </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2 row">
                        
                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-cash text-success me-1"></i>
                            <div>
                                <h6 class="text-sm">Salary</h6>
                                <span class="text-xs">{{$tuitor->salary}}</span>
                            </div>
                        </div>

                        <div class="flex text-sm col tution">
                            <i class="bi bi-book text-warning me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Class </h6>
                                <span class="text-xs"> {{$tuitor->category_id}}</span>
                            </div>
                        </div>

                        <div class="flex text-sm col tution">
                            <i class="bi bi-book text-warning me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Class</h6>
                                <span class="text-xs"> {{$tuitor->class_id}} </span>
                            </div>
                        </div>

                    </div>
                    
                    <div class=" mt-2 row">
                        <div class="flex text-sm col tution">
                            <i class="bi bi-book text-warning me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Subjects</h6>
                                <span class="text-xs"> {{$tuitor->subject_id}}</span>
                            </div>
                        </div>

                        <div class=" flex text-sm col tution">
                            <i class="bi bi-pin text-info me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Location</h6>
                                <span class="text-xs">{{$tuitor->location_id}},  {{$tuitor->city_id}}</span>
                            </div>
                        </div>

                        <div class=" flex text-sm col tution">
                            <i class="bi bi-pin text-info me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Address</h6>
                                <span class="text-xs">{{$tuitor->address}}</span>
                            </div>
                        </div>

                    </div>

                    <div class=" d-flex justify-content-between mt-3">
                        <button class="text-sm btn btn-primary rounded-pill">Apply</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- End of card structure -->

        <!-- Repeat the above card structure for additional items -->
    </div>
  </div>

  <!------------------- End Changing Part ---------------------->
  {{-- @include('frontend/layout/footer') --}}
  @endsection