@extends('dashboard.layout.layout')
@section('content')
<!------------------- Please Change Me Here ---------------------->

<div class="p-0" >
    <div class="row g-3">
        <!-- Repeat the following card structure for each item -->
        <div class="col-lg-12">
            <div class="shadow card h-100">
                <div class="card-body p-4">
                    <div class="text-center">
                        <h3 class="card-title font-weight-bold text-dark">{{$guardian->name}} </h3>
                        <div class="mt-3 mb-2 text-sm text-muted">
                            <h6>Phone: <b> {{$guardian->number}}</b></h6> 
                            <h6>Email: <b>{{$guardian->email}}</b></h6>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex mb-2 text-sm col tution">
                                <h6 class="text-sm">Name : {{$guardian->name}}</h6>
                        </div>

                        <div class="flex mb-2 text-sm col tution"><div>
                                <h6 class="text-sm">Number : {{$guardian->number}}</h6></div>
                        </div>

                        <div class="flex mb-2 text-sm col tution">
                                <h6 class="text-sm">Email : {{$guardian->email}}</h6>
                        </div>

                        {{-- <div class="flex mb-2 text-sm col tution">
                                <h6 class="text-sm">Gender : {{$guardian->gender}}</h6>
                        </div> --}}

                        <div class="flex mb-2 text-sm col tution">
                                <h6 class="text-sm">Created Date :  {{$guardian->created_at}}</h6>
                        </div>
                    </div>
                        {{-- <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-person text-secondary me-1"></i>
                            <div>
                                <h6 class="text-sm">Number of Students</h6>
                                <span class="text-xs">{{$tuitor->student->nb_of_student}} </span>
                            </div>
                        </div> --}}
                    

                    
                    {{-- <div class=" d-flex justify-content-between mt-3">
                        <form action="{{route('apply',$tuitor->tuitor_id)}}" method="post">
                            @csrf

                                <input type="submit" class="text-sm btn btn-primary rounded-pill disabled" value="Delete">
                                                   
                        </form>
                    </div> --}}

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