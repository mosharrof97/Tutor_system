@extends('dashboard.layout.layout')
@section('content')
    <div class="p-0">
        <div class="row g-3">
            <!-- Repeat the following card structure for each item -->
            <div class="col-lg-12">
                <div class="shadow card h-100">
                    <div class="card-body p-4">

                        <h4 class="card-title font-weight-bold"> {{ $acceptedDetails->tuitor->category->category_name }}
                            Tutor For {{ $acceptedDetails->tuitor->studentClass->class_name }} Student -
                            {{ $acceptedDetails->tuitor->day->day_name }}</h4>
                        <p class="mt-3 mb-2 text-sm text-muted">
                            <span>JobId: <b>{{ 1000 + $acceptedDetails->tuitor->tuitor_id }}</b></span> |
                            <span>Posted Date: <b>{{ $acceptedDetails->tuitor->created_at }}</b></span>
                        </p>

                        <div class=" mt-2 row">
                            <div class="flex mb-2 text-sm col tution">
                                <i class="bi bi-book text-primary me-1"></i><br>
                                <div>
                                    <h6 class="text-sm">Tuition Type</h6>
                                    <span class="text-xs">{{ $acceptedDetails->tuitor->tuition->tuition_name }}</span>
                                </div>
                            </div>

                            <div class="flex mb-2 text-sm col tution">
                                <i class="bi bi-person text-secondary me-1"></i>
                                <div>
                                    <h6 class="text-sm">Student Gender</h6>
                                    <span class="text-xs">{{ $acceptedDetails->tuitor->student_gender }}</span>
                                </div>
                            </div>

                            <div class="flex mb-2 text-sm col tution">
                                <i class="bi bi-person text-secondary me-1"></i>
                                <div>
                                    <h6 class="text-sm"> Tutor Gender</h6>
                                    <span class="text-xs">{{ $acceptedDetails->tuitor->tuitor_gender }}</span>
                                </div>
                            </div>
                        </div>

                        <div class=" mt-2 row">
                            <div class="flex mb-2 text-sm col tution">
                                <i class="bi bi-book text-primary me-1"></i><br>
                                <div>
                                    <h6 class="text-sm">Tutoring Time</h6>
                                    <span class="text-xs">{{ $acceptedDetails->tuitor->tuition_time }}</span>
                                </div>
                            </div>

                            <div class="flex mb-2 text-sm col tution">
                                <i class="bi bi-person text-secondary me-1"></i>
                                <div>
                                    <h6 class="text-sm">Tutoring Days</h6>
                                    <span class="text-xs"> {{ $acceptedDetails->tuitor->day->day_name }}</span>
                                </div>
                            </div>

                            <div class="flex mb-2 text-sm col tution">
                                <i class="bi bi-person text-secondary me-1"></i>
                                <div>
                                    <h6 class="text-sm">Number of Students</h6>
                                    <span class="text-xs">{{ $acceptedDetails->tuitor->student->nb_of_student }} </span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2 row">

                            <div class="flex mb-2 text-sm col tution">
                                <i class="bi bi-cash text-success me-1"></i>
                                <div>
                                    <h6 class="text-sm">Salary</h6>
                                    <span class="text-xs">{{ $acceptedDetails->tuitor->salary }}</span>
                                </div>
                            </div>

                            <div class="flex text-sm col tution">
                                <i class="bi bi-book text-warning me-1"></i><br>
                                <div>
                                    <h6 class="text-sm">Category of School </h6>
                                    <span class="text-xs"> {{ $acceptedDetails->tuitor->category->category_name }}</span>
                                </div>
                            </div>

                            <div class="flex mb-2 text-sm col tution">
                                <i class="bi bi-cash text-success me-1"></i>
                                <div>
                                    <h6 class="text-sm">Institute Name</h6>
                                    <span class="text-xs">{{ $acceptedDetails->tuitor->institute_name }}</span>
                                </div>
                            </div>

                        </div>

                        <div class=" mt-2 row">

                            <div class="flex text-sm col tution">
                                <i class="bi bi-book text-warning me-1"></i><br>
                                <div>
                                    <h6 class="text-sm">Class</h6>
                                    <span class="text-xs"> {{ $acceptedDetails->tuitor->studentClass->class_name }} </span>
                                </div>
                            </div>

                            <div class="flex text-sm col tution">
                                <i class="bi bi-book text-warning me-1"></i><br>
                                <div>
                                    <h6 class="text-sm">Subjects</h6>
                                    <span class="text-xs"> {{ $acceptedDetails->tuitor->subject->subject_name }}</span>
                                </div>
                            </div>

                            <div class=" flex text-sm col tution">
                                <i class="bi bi-pin text-info me-1"></i><br>
                                <div>
                                    <h6 class="text-sm">Location</h6>
                                    <span class="text-xs">{{ $acceptedDetails->tuitor->location->location_name }},
                                        {{ $acceptedDetails->tuitor->city->city_name }}</span>
                                </div>
                            </div>
                        </div>

                        <div class=" mt-2 row">

                            <div class=" flex text-sm col tution">
                                <i class="bi bi-pin text-info me-1"></i><br>
                                <div>
                                    <h6 class="text-sm">Address</h6>
                                    <span class="text-xs">{{ $acceptedDetails->tuitor->address }}</span>
                                </div>
                            </div>

                            {{-- <div class="flex text-sm col tution">
                            <i class="bi bi-book text-warning me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Class</h6>
                                <span class="text-xs"> {{$acceptedDetails->tuitor->studentClass->class_name}} </span>
                            </div>
                        </div>
                        
                        <div class="flex text-sm col tution">
                            <i class="bi bi-book text-warning me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Subjects</h6>
                                <span class="text-xs"> {{$acceptedDetails->tuitor->subject->subject_name}}</span>
                            </div>
                        </div>

                        <div class=" flex text-sm col tution">
                            <i class="bi bi-pin text-info me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Location</h6>
                                <span class="text-xs">{{$acceptedDetails->tuitor->location->location_name}},  {{$acceptedDetails->tuitor->city->city_name}}</span>
                            </div>
                        </div> --}}
                        
                        </div>

                    </div>
                </div>
            </div>
            <!-- End of card structure -->

            <!-- Repeat the above card structure for additional items -->
        </div>
    </div>
@endsection
