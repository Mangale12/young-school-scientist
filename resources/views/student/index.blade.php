@extends('student.student-dashboard')
@section('content')
    @include('student.layout.banner-profile')
    @include('student.layout.my-learning')
    <section class="my-learning-tag py-4">
        <div class="container">
            <ul class="nav nav-pills d-flex justify-content-center d mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="All-tab" data-bs-toggle="pill" data-bs-target="#All" type="button"
                        role="tab" aria-controls="All" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="Curriculum-tab" data-bs-toggle="pill" data-bs-target="#Curriculum"
                        type="button" role="tab" aria-controls="Curriculum" aria-selected="false">School Curriculum
                    </button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">
                    Teacher Resources
                </button>
            </li> --}}
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="skill-courses-tab" data-bs-toggle="pill" data-bs-target="#skill-courses"
                        type="button" role="tab" aria-controls="skill-courses" aria-selected="false">
                        Skill Courses
                    </button>
                </li>
            </ul>
            <div class="tab-content courses" id="pills-tabContent">
                <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="All-tab"
                    tabindex="0">

                    <div class="row justify-content-center g-4">
                        @if($data['rows']->count() > 0)
                        @foreach ($data['rows'] as $row)
                        <div class="col-lg-3">
                            <div class="courses__details border h-100">
                                <a href="{{ Route::has('courses.view') ? route('courses.view', ['id'=>$row->id]) : '#' }}">
                                    @if ($row->video_url)
                                        {{-- Get the YouTube video ID --}}
                                        @php
                                            $videoId = \Str::after($row->video_url, 'v=');
                                        @endphp
                                        {{-- Display the YouTube thumbnail --}}
                                        <img class="w-100"
                                            src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                            alt="YouTube Thumbnail" style="height: 200px; object-fit:cover;">
                                    @else
                                        <img class="w-100"
                                            src="{{ asset('teacher/assets/images/Programming-for-Kids-768x288.jpg') }}"
                                            alt="" style="height: 200px; object-fit:cover;">
                                    @endif
                                </a>
                                <div class="courses__details--content p-3">
                                    <span>{{ $row->sessions->count() }} Lessons</span>
                                    <a class="d-block my-2" href="{{ route('courses.view', $row->id) }}">
                                        {{ $row->name }}
                                    </a>
                                    <p>
                                        {{-- Display only the first 50 words of the description --}}
                                        {{ \Str::words(strip_tags($row->description), 20, '...') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                    



                        {{-- @foreach ($courses as $course)
                   
            
                    <div class="col-lg-3">
                        <div class="courses__details border">
                            <a href="{{ route('courses.view', $course->id) }}">
                                @if ($course->video_url)
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" 
                                            src="https://www.youtube.com/embed/{{ \Str::after($course->video_url, 'v=') }}" 
                                            allowfullscreen>
                                    </iframe>
                                </div>
                            @else
                            <img class="w-100" src="{{asset('teacher/assets/images/Programming-for-Kids-768x288.jpg')}}" alt="">

                            @endif
                            </a>
                            <div class="courses__details--content p-3">
                                <span> 12 Lessons</span>
                                <a class="d-block my-2" href="#">
                                    {{ $course->name }}
                                </a>

                                <p>
                                    {!! $course->description !!}
                                </p>
                             

                            </div>
                        </div>

                    </div>
                    @endforeach --}}
                    </div>

                </div>
                <div class="tab-pane fade" id="Curriculum" role="tabpanel" aria-labelledby="Curriculum-tab" tabindex="0">
                    School Curriculum</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"
                    tabindex="0">...</div>
                <div class="tab-pane fade" id="skill-courses" role="tabpanel" aria-labelledby="skill-courses-tab"
                    tabindex="0">Skill Courses</div>
            </div>
        </div>
    </section>
@endsection
