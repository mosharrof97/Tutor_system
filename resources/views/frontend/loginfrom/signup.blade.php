@extends('frontend/layout/header')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tutors World</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
        .h-custom {
        height: 100%;
        }
        }
        </style>

</head>
<body>


<section class="vh-100" style="margin-top:60px">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">

            <img src="{{asset('frontend/assets/img/bag.jpg')}}" alt="Sample image" class="img-fluid">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form>
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <h1 class="lead fw-normal text-success fs-2 mb-0 me-3"> Welcome Back</h1>
            </div>

        <div> <p class="text-primary"> Sign In to Continue </p></div>

          <div class="row">
           <div class="col">
                <img src="{{asset('frontend/assets/img/gurdian.png')}}" alt="" class="img-fluid">
            </div>

           <div class="col">
                <img src="{{asset('frontend/assets/img/tutor.png')}}" alt="" class="img-fluid">
            </div>
         </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control form-control-lg"
                placeholder="Enter your name" />
            </div>

            <div class="form-outline mb-3">
              <input type="phone" id="form3Example4" class="form-control form-control-lg"
                placeholder="Phone Number" />
            </div>

             <div class="form-outline mb-3">
                <input type="email" id="form3Example4" class="form-control form-control-lg"
                  placeholder="Email" />
              </div>

              <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                  placeholder="Password" />
              </div>

               <div class="form-outline mb-3">
                  <input type="email" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Confirm Pasword" />
                </div>

             <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
               <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                 <label class="form-check-label text-success" for="form2Example3">
                    I agree to <p class="text-info">the Terms of Use and Privacy Policy</p>
                 </label>
               </div>



            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="button" class="btn btn-primary btn-lg"
                style="padding-left: 1rem; padding-right: 1rem;">Sign Up -></button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="#!"
                  class="link-danger">Sign In</a></p>
            </div>
        </div>

          </form>
        </div>
      </div>
    </div>
    </div>
  </section>
</body>
</html>

  @include('frontend/layout/footer')
@endsection
