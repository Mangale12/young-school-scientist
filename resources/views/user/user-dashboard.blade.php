<!doctype html>
<html lang="en">

<head>
    @include('user.layout.head')
    <style>
        .btn.active {
            background-color: #673AB7;
            /* Change to your desired active color */
            color: #fff;
        }
    </style>

</head>

<body>
    @include('user.layout.header')


    @yield('content')

    @include('user.layout.footer')

    <!-- Modal login-->
    <div class="modal fade login-modals" id="loginForm" tabindex="-1" aria-labelledby="loginFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5  fw-bold w-100 " id="exampleModalLabel">Young Scientist Login</h1>

                    <button type="button" class="btn-close close-btn-right" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <img src="{{asset('user/assets/images/popup-sidebar1-1.png')}} " alt="login" style="width: 100%;">

                        </div>
                        <div class="col-lg-7  p-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf <!-- CSRF Token for security -->
                            
                                <!-- Email / Username -->
                                <div class="mb-4">
                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Username / Email" required autofocus autocomplete="username">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            
                                <!-- Password -->
                                <div class="mb-2">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="current-password">
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                            
                                <!-- Forgot Password Link -->
                                <div class="mb-2 d-flex justify-content-end">
                                    @if (Route::has('password.request'))
                                        <a class="forget-password" href="{{ route('password.request') }}">Forgot Password?</a>
                                    @endif
                                </div>
                            
                                <!-- Submit Button -->
                                <div class="mb-4">
                                    <button type="submit" class="btn w-100 submit-btn">Sign in</button>
                                </div>
                            </form>
                            
                            <p>LET’S START LEARNING</p>
                            <div class="mb-4">
                                <a class="btn   w-100 submit-sign-up" data-bs-toggle="modal" data-bs-target="#registerForm" >Sign Up</a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Register login-->

<!-- Register Modal -->
    <div class="modal fade login-modals" id="registerForm" tabindex="-1" aria-labelledby="registerFormLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content position-relative-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold w-100" id="exampleModalLabel">
                        <button class="btn submit-btn {{ old('role') == 'student' || !old('role') ? 'active' : '' }}" id="studentButton">Student Registration</button>
                        <button class="btn submit-btn {{ old('role') == 'teacher' ? 'active' : '' }}" id="teacherButton">Teacher Registration</button>
                    </h1>
                    <button type="button" class="btn-close close-btn-right" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Student Registration Form -->
                <div class="modal-body" id="student-registration" style="{{ old('role') == 'teacher' ? 'display:none;' : '' }}">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Hidden Role for Student -->
                        <input type="hidden" name="role" value="student">
                        <div class="row g-3">
                            <!-- Student Form Fields -->
                            <div class="col-lg-6">
                                <input id="name" type="text" name="name" class="form-control" placeholder="Student Name" value="{{ old('name') }}" required autofocus>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="student_id" class="form-control" placeholder="Student ID" value="{{ old('student_id') }}" required>
                                @error('student_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input id="email" type="email" name="email" class="form-control" placeholder="Student Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="school_name" class="form-control" placeholder="School Name" value="{{ old('school_name') }}" required>
                                @error('school_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <select id="grade" class="form-control" name="grade" required>
                                    <option value="" selected>Choose your Grade</option>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}" {{ old('grade') == $i ? 'selected' : '' }}>Grade {{ $i }}</option>
                                    @endfor
                                </select>
                                @error('grade')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="section" class="form-control" placeholder="Section" value="{{ old('section') }}">
                                @error('section')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="date_of_birth" class="form-control" id="dateOfBirth" placeholder="Date of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" value="{{ old('date_of_birth') }}" required>
                                @error('date_of_birth')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}" required>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="number" name="parents_phone_number" class="form-control" placeholder="Parents Phone Number" value="{{ old('parents_phone_number') }}" required>
                                @error('parents_phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="parents_email" class="form-control" placeholder="Parents Email" value="{{ old('parents_email') }}">
                                @error('parents_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input id="password" type="password" name="password" class="form-control" placeholder="Your Password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <button type="submit" class="btn w-100 submit-btn">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Teacher Registration Form -->
                <div class="modal-body" id="teacher-registration" style="{{ old('role') == 'student' || !old('role') ? 'display:none;' : '' }}">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Hidden Role for Teacher -->
                        <input type="hidden" name="role" value="teacher">
                        <div class="row g-3">
                            <!-- Teacher Form Fields -->
                            <div class="col-lg-6">
                                <input type="text" name="name" class="form-control" placeholder="Teacher Name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input id="email" type="email" name="email" class="form-control" placeholder="Teacher Email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="teacher_id" class="form-control" placeholder="Teacher ID" value="{{ old('teacher_id') }}">
                                @error('teacher_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="subject_expert" class="form-control" placeholder="Subject Expert" value="{{ old('subject_expert') }}" required>
                                @error('subject_expert')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input id="password" type="password" name="password" class="form-control" placeholder="Your Password" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <button type="submit" class="btn w-100 submit-btn">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    @if(request()->has('showLoginModal'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var loginModal = new bootstrap.Modal(document.getElementById('loginForm'));
                loginModal.show();
            });
        </script>
    @endif

<!-- JavaScript to toggle forms -->
<script>
    $(document).ready(function() {
        // Automatically open the modal if there are validation errors
        @if ($errors->any())
            $('#registerForm').modal('show'); // Open modal
            if ('{{ old('role') }}' === 'teacher') {
                $('#teacher-registration').show();
                $('#student-registration').hide();
                $('#teacherButton').addClass('active');
                $('#studentButton').removeClass('active');
            } else {
                $('#student-registration').show();
                $('#teacher-registration').hide();
                $('#studentButton').addClass('active');
                $('#teacherButton').removeClass('active');
            }
        @endif

        // Toggle form display on button click
        $('#studentButton').click(function() {
            $('#student-registration').show();
            $('#teacher-registration').hide();
            $('#studentButton').addClass('active');
            $('#teacherButton').removeClass('active');
        });

        $('#teacherButton').click(function() {
            $('#teacher-registration').show();
            $('#student-registration').hide();
            $('#teacherButton').addClass('active');
            $('#studentButton').removeClass('active');
        });
    });
</script>

    <script>
        document.getElementById('studentButton').addEventListener('click', function() {
            document.getElementById('student-registration').style.display = 'block';
            document.getElementById('teacher-registration').style.display = 'none';
        });

        document.getElementById('teacherButton').addEventListener('click', function() {
            document.getElementById('teacher-registration').style.display = 'block';
            document.getElementById('student-registration').style.display = 'none';
        });

        // By default, display the student registration form
        document.getElementById('student-registration').style.display = 'block';
        document.getElementById('teacher-registration').style.display = 'none';
    </script>
    <script>
        document.getElementById('studentButton').addEventListener('click', function() {
            document.getElementById('student-registration').style.display = 'block';
            document.getElementById('teacher-registration').style.display = 'none';

            // Add active class to the student button and remove from the teacher button
            this.classList.add('active');
            document.getElementById('teacherButton').classList.remove('active');
        });

        document.getElementById('teacherButton').addEventListener('click', function() {
            document.getElementById('teacher-registration').style.display = 'block';
            document.getElementById('student-registration').style.display = 'none';

            // Add active class to the teacher button and remove from the student button
            this.classList.add('active');
            document.getElementById('studentButton').classList.remove('active');
        });
    </script>
    <script>
        $('.owl-partner').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            lazyLoad: true,
            autoplayHoverPause: true,
            margin: 15,
            responsiveClass: true,
            navText: [
                '<i class="fa-solid fa-chevron-left"></i>',
                '<i class="fa-solid fa-chevron-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 5,
                    nav: false,
                    loop: true
                }
            }
        })
        $('.owl-clints').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            lazyLoad: true,
            autoplayHoverPause: true,
            dots: true,
            nav: true,
            items: 1,
            navText: [
                '<i class="fa-solid fa-chevron-left"></i>',
                '<i class="fa-solid fa-chevron-right"></i>'
            ],

        })
    </script>
</body>

</html>
