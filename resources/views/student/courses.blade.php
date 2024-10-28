@extends('student.student-dashboard')
@section('content')

<div class="banner-inner position-relative">
    <img class="banner-img" src="{{ asset('teacher/assets/images/cover-image.png') }}" alt="img">
    <section class="group-member">
        <div class="container">
            <div class="group-profile d-flex align-items-center">
                <img src="{{ asset('teacher/assets/images/profile.png') }}" alt="">
                <div class="ms-4">
                    <h2 class="text-white">{{ $course->name }} Course Group</h2>
                    <small class="text-white">Active 7 weeks ago</small>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="my-learning bg-white pb-1">
    <div class="container text-center d-flex flex-column align-items-start">
        <nav>
            <ul class="d-flex align-items-center justify-content-center list-unstyled">
                <li><a class="text-dark" href="#">Members</a></li>
                <li><a class="active text-dark" href="#">Course</a></li>
            </ul>
        </nav>
    </div>
</section>

<section class="courses py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="courses__details">
                    <h2 class="pb-3">{{ $course->name }}</h2>
                    <div class="itinery">
                        <p>{!! $course->description !!}</p>

                        <h4 class="pb-3">Course Content</h4>

                        <div class="accordion" id="accordionExample">
                            @foreach ($course->sessions as $key => $session)
                                <div class="itinery__item">
                                    <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#session{{ $key }}" aria-expanded="false" aria-controls="session{{ $key }}">
                                        <h5>
                                            <span>Lesson {{ $key + 1 }}:</span> {{ $session->session }}
                                        </h5>
                                    </a>
                                    <div id="session{{ $key }}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>{!! $session->description !!}</p>

                                           
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="courses-sidebar border sticky-top z-0 rounded-2 overflow-hidden" style="top: 110px;">
                    <div class="profile">
                        @if ($course->video_url)
                            {{-- Extract the YouTube video ID --}}
                            @php
                                $videoId = \Str::after($course->video_url, 'v=');
                            @endphp
                        
                            <div class="profile">
                                {{-- Use Fancybox with iframe to play the YouTube video in a modal --}}
                                <a data-fancybox="gallery" data-type="iframe" href="https://www.youtube.com/embed/{{ $videoId }}">
                                    <img class="w-100" src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg" alt="YouTube Thumbnail">
                                </a>
                            </div>
                        @else
                            <img class="w-100" src="{{ asset('teacher/assets/images/Programming-for-Kids-768x288.jpg') }}" alt="Course Image">
                        @endif
                    </div>
                    
                    <div class="p-4">
                        <a class="btn btn-start py-2 px-4 w-100 rounded-5 bg-primary text-white fw-bold" href="#">Start Course</a>
                        <h5 class="py-3">Course Includes</h5>
                        <p><i class="fa-solid fa-book"></i> {{ $course->sessions->count() }} Lessons</p>
                        <p><i class="fa-regular fa-address-book"></i> 49 Topics</p>
                    </div>
                 
                </div>
            </div>
            
        </div>
    </div>
</section>


@endsection










