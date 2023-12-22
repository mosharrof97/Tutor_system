@extends('frontend/layout/header')
@section('content')
    <div class="page-content">
        <div class="form-v8-content">
            <div class="form-left">
                <img src="{{ asset('frontend/assets/img/bag.jpg') }}" alt="form">
            </div>

            <div class="form-right">
                <div class="tab">
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'guardian')" id="defaultOpen">
                            Guardian or Student
                        </button>
                    </div>
                    <div class="tab-inner">
                        <button class="tablinks" onclick="openCity(event, 'tuitor')">Tuitor</button>
                    </div>
                </div>

                {{-- Guardian --}}
                <form class="form-detail" action="{{route('guardian_register')}}" method="post">
                    @csrf

                    <div class="tabcontent" id="guardian">
                        <div class="form-row mb-4">
                            <label class="form-row-inner">
                                <input type="text" name="name" id="name" class="input-text" >
                                <span class="label">Name</span>
                                <span class="border"></span>
                            </label>

                            @error('name')
                                <span id="" class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-row d-flex mb-4">
                            <div class=" form-row-inner  me-2 ">
                                <label class="form-row-inner ">
                                    <input type="text" name="number" id="number" class="input-text mb-1" >
                                    <span class="label">Number</span>
                                    <span class="border"></span>
                                </label>

                                @error('number')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class=" form-row-inner  ms-2">
                                <label class="form-row-inner ">
                                    <input type="text" name="email" id="email" class="input-text mb-1" >
                                    <span class="label">E-Mail</span>
                                    <span class="border"></span>
                                </label>

                                @error('email')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row d-flex mb-4">
                            <div class="form-row-inner  me-2">
                                <label class="form-row-inner">
                                    <input type="password" name="password" id="password" class="input-text" >
                                    <span class="label">Password</span>
                                    <span class="border"></span>
                                </label>

                                @error('password')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row-inner  ms-2">
                                <label class="form-row-inner ">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="input-text"
                                        >
                                    <span class="label">Comfirm Password</span>
                                    <span class="border"></span>
                                </label>

                                @error('password_confirmation')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register">
                        </div>
                    </div>
                </form>
                {{-- Guardian --}}

                {{-- Tuitor --}}
                <form class="form-detail" action="{{route('tuitor_register')}}" method="post">
                    @csrf

                    <div class="tabcontent" id="tuitor">

                        <div class="form-row d-flex mb-4">
                            <div class=" form-row-inner me-2">

                                <label class="form-row-inner ">
                                    <input type="text" name="name" id="name" class="input-text" >
                                    <span class="label">Name</span>
                                    <span class="border"></span>
                                </label>

                                @error('name')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row-inner  ms-2">

                                <label class="form-row-inner ">
                                    <select name="gender" id="gender" class="input-text">
                                        <option value="">Select... </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Any">Any</option>
                                    </select>
                                    <span class="label">Gender</span>
                                    <span class="border"></span>
                                </label>

                                @error('gender')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>

                        <div class="form-row d-flex mb-4">
                            <div class="form-row-inner  me-2">
                                <label class="form-row-inner ">
                                    <input type="text" name="number" id="number" class="input-text" >
                                    <span class="label">Number</span>
                                    <span class="border"></span>
                                </label>

                                @error('number')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row-inner  ms-2">
                                <label class="form-row-inner ">
                                    <input type="text" name="email" id="email" class="input-text" >
                                    <span class="label">E-Mail</span>
                                    <span class="border"></span>
                                </label>

                                @error('email')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row d-flex mb-4">

                            <div class="form-row-inner  me-2">
                                <label class="form-row-inner ">
                                    <input type="password" name="password" id="password" class="input-text" >
                                    <span class="label">Password</span>
                                    <span class="border"></span>
                                </label>

                                @error('password')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row-inner  ms-2">
                                <label class="form-row-inner">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="input-text" >
                                    <span class="label">Comfirm Password</span>
                                    <span class="border"></span>
                                </label>

                                @error('password_confirmation')
                                    <span id="" class="form-text text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row-last">
                            <input type="submit" name="register" class="register" value="Register">
                        </div>
                    </div>
                </form>
                {{-- Tuitor --}}

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
