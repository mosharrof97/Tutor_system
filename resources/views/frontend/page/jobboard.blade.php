@extends('frontend/layout/header')
{{-- @section('content') --}}
<!------------------- Please Change Me Here ---------------------->

<div class="container" style="margin-top: 6rem">
    <div class="row g-3">
        <!-- Repeat the following card structure for each item -->
        <div class="col-lg-6">
            <div class="shadow card h-100">
                <div class="card-body">
                    <h5 class="card-title font-weight-bold">Need Bnagla Version Tutor For ssc-1st Year Student</h5>
                    <p class="mt-3 mb-2 text-sm text-muted">
                        <span>JobId: <b>1</b></span> |
                        <span>Posted Date: <b>jan 1 2023</b></span>
                    </p>
                    <div class="mt-5 row">
                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-book text-primary me-1"></i><br>
                            <span>
                                <span class="text-sm">Tuition Type</span>
                                <p class="text-xs">Home Tutor</p>
                            </span>
                        </div>

                        <div class="flex mb-2 text-sm col tution">
                            <i class="bi bi-cash text-success me-1"></i><br>
                            <span>
                                <span class="text-sm">Salary</span>
                                <p class="text-xs">5000 BDT</p>
                            </span>
                        </div>

                        <div class="flex text-sm col tution">
                            <i class="bi bi-book text-warning me-1"></i><br>
                            <span>
                                <span class="text-sm">Subject</span>
                                <p class="text-xs">Higher Maths</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex card-body">
                    <i class="bi bi-pin text-info me-1"></i><br>
                    <span>
                        <span class="text-sm">Location</span>
                        <p class="text-xs">Kuril | Dhaka</p>
                    </span>
                </div>
                <div class="card-body d-flex justify-content-between">
                    <div class="flex align-items-center">
                        <i class="bi bi-person text-secondary me-1"></i>
                        <span class="text-sm">Male tutor preferred</span>
                    </div>
                    <button class="text-sm btn btn-primary rounded-pill">Save Changes</button>
                </div>
            </div>
        </div>
        <!-- End of card structure -->

        <!-- Repeat the above card structure for additional items -->
    </div>
  </div>

  <!------------------- End Changing Part ---------------------->
  @include('frontend/layout/footer')
  {{-- @endsection --}}
