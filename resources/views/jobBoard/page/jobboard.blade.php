@extends('jobBoard.layout.layout')
@section('content')
<!------------------- Please Change Me Here ---------------------->

<div class="p-0" >
    <div class="row g-3">
        <!-- Repeat the following card structure for each item -->
        @foreach ( $tuitor as $data )

        <div class="col-lg-6">
            <div class="shadow card h-100">
                <div class="card-body p-4">
                    <h4 class="card-title font-weight-bold">Need {{$data->category->category_name}} Tutor For {{$data->studentClass->class_name}} Student  - {{$data->day->day_name}}</h4>
                    <p class="mt-3 mb-2 text-sm text-muted">
                        <span>JobId: <b>{{1000 + $data->tuitor_id}}</b></span> |
                        <span>Posted Date: <b>{{$data->created_at}}</b></span>
                    </p>

                    <div class=" mt-2 row">
                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-book text-primary me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Tuition Type</h6>
                                <span class="text-xs">{{$data->tuition->tuition_name}}</span>
                            </div>
                        </div>

                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-person text-secondary me-1"></i>
                            <div>
                                <h6 class="text-sm">Preferred Tutor</h6>
                                <span class="text-xs">{{$data->tuitor_gender}} </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-2 row">
                        
                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-cash text-success me-1"></i>
                            <div>
                                <h6 class="text-sm">Salary</h6>
                                <span class="text-xs">{{$data->salary}}</span>
                            </div>
                        </div>

                        <div class="flex text-sm col tution">
                            <i class="bi bi-book text-warning me-1"></i><br>
                            <div>
                                <h6 class="text-sm">Subject</h6>
                                <span class="text-xs">{{$data->subject->subject_name}}</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class=" mt-2">
                        <i class="bi bi-pin text-info me-1"></i><br>
                        <div>
                            <h6 class="text-sm">Location</h6>
                            <span class="text-xs">{{$data->location->location_name}}, {{$data->city->city_name}}</span>
                        </div>
                    </div>

                    <div class=" d-flex justify-content-between mt-3">
                        <a class="text-sm btn btn-primary rounded-pill" href="{{route('jobdetails',$data->tuitor_id)}}">Details</a>
                    </div>

                </div>
            </div>
        </div>

        @endforeach
        <!-- End of card structure -->

        <!-- Repeat the above card structure for additional items -->
    </div>
  </div>

  <!------------------- End Changing Part ---------------------->
  {{-- @include('frontend/layout/footer') --}}
  @endsection