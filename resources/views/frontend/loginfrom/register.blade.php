@extends('frontend/layout/header')
@section('content')
    <div class="page-content">
        <div class="form-v8-content">
            <div class="form-left">
                <img src="{{asset('frontend/assets/img/bag.jpg')}}" alt="form">
            </div>
            
            <div class="form-right">
                <div class="tab">
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'guardian')" id="defaultOpen">
                            Guardian or  Student
                        </button>
                    </div>
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'tuitor')">Tuitor</button>
                    </div>
                </div>
                <form class="form-detail" action="#" method="post">
                    <div class="tabcontent" id="guardian">
                        <div class="form-row">
                            <label class="form-row-inner">
                                <input type="text" name="full_name" id="full_name" class="input-text" required>
                                <span class="label">Name</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row d-flex">
                            <label class="form-row-inner me-2">
                                <input type="text" name="your_email" id="your_email" class="input-text" required>
                                <span class="label">Number</span>
                                <span class="border"></span>
                            </label>

                            <label class="form-row-inner ms-2">
                                <input type="text" name="your_email" id="your_email" class="input-text" required>
                                <span class="label">E-Mail</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row d-flex">
                            <label class="form-row-inner me-2">
                                <input type="password" name="password" id="password" class="input-text" required>
                                <span class="label">Password</span>
                                <span class="border"></span>
                            </label>
                       
                            <label class="form-row-inner ms-2">
                                <input type="password" name="comfirm_password" id="comfirm_password" class="input-text"
                                    required>
                                <span class="label">Comfirm Password</span>
                                <span class="border"></span>
                            </label>
                        </div>

                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register">
                        </div>
                    </div>
                </form>

                <form class="form-detail" action="#" method="post">
                    <div class="tabcontent" id="tuitor">

                        <div class="form-row d-flex">
                            
                            <label class="form-row-inner me-2">
                                <input type="text" name="full_name" id="full_name" class="input-text" required>
                                <span class="label">Name</span>
                                <span class="border"></span>
                            </label>
                           
                            <div class="form-row-inner ms-2">
                                <label for=""> Gender</label>
                                <div class=" d-flex">
                                <div class="form-check me-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                     Male
                                    </label>
                                  </div>
                                  <div class="form-check ms-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Female
                                    </label>
                                  </div>
                            </div>
                        </div>
                        </div>

                        <div class="form-row d-flex">
                            <label class="form-row-inner me-2">
                                <input type="text" name="your_email" id="your_email" class="input-text" required>
                                <span class="label">Number</span>
                                <span class="border"></span>
                            </label>

                            <label class="form-row-inner ms-2">
                                <input type="text" name="your_email" id="your_email" class="input-text" required>
                                <span class="label">E-Mail</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row d-flex">
                            <label class="form-row-inner me-2">
                                <input type="password" name="password" id="password" class="input-text" required>
                                <span class="label">Password</span>
                                <span class="border"></span>
                            </label>
                       
                            <label class="form-row-inner ms-2">
                                <input type="password" name="comfirm_password" id="comfirm_password" class="input-text"
                                    required>
                                <span class="label">Comfirm Password</span>
                                <span class="border"></span>
                            </label>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    @include('frontend/layout/footer')
@endsection
