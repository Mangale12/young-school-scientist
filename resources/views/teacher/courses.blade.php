@extends('teacher.teacher-dashboard')
@section('content')
<div class="banner-inner position-relative">
    <img class="banner-img" src="{{asset('teacher/assets/images/cover-image.png')}}" alt="img">
    <section class="group-member">
        <div class="container">
            <div class="group-profile d-flex align-items-center">
                <img src="{{asset('teacher/assets/images/profile.png')}}" alt="">
                <div class="ms-4">
                    <h2 class="text-white">Introduction to Python Course Group</h2>
                    <small class="text-white">
                        Active 7 weeks ago
                    </small>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="my-learning bg-white pb-1">
    <div class="container text-center d-flex flex-column align-items-start">
        <nav>
            <ul class="d-flex align-items-center justify-content-center list-unstyled">
                <li><a class=" text-dark" href="#">Members</a></li>
                <li><a class="active text-dark" href="#">Course</a></li>
            </ul>
        </nav>
    </div>
</section>

<section class="courses  py-4">
    <div class="container">
    
        <div class="row">
            
            <div class="col-lg-8">
                <div class="courses__details ">
                    <h2 class="pb-3">{{$data['rows']->title}}</h2>
                    
                 
                    <div class="itinery ">
                        <p> {!! $data['rows']->description !!} </p>
                        
                        <h5 class="pb-3">Basics of Coding</h5>
                        <h4 class="pb-3">Course Content</h4>

                        <div class="accordion" id="accordionExample">
                            @if($data['rows']->sessions->isNotEmpty())
                            @foreach($data['rows']->sessions as $key => $session)
                            <div class="itinery__item">
                                <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#one{{$key}}" aria-expanded="false" aria-controls="one1">
                                    <h5>
                                        {{-- <span>Lesson 1: --}}</span>  
                                        {{$session->session}}
                                    </h5>
                                </a>
                                <div id="one{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <p>{!! $session->description !!} </p>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <h5 class="py-3">Teacher Related Materials</h5>

                        <div class="accordion" id="accordionExample">
                            @if($data['user']->teacherResources->count() > 0)
                            @foreach($data['user']->teacherResources as $key=>$resource)
                            <div class="itinery__item">
                                <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day{{$key}}" aria-expanded="false" aria-controls="dayone">
                                    <h5>
                                        {{-- <span>Lesson 1:</span>   --}}
                                        {{ $resource->title }}
                                    </h5>
                                </a>
                                <div id="day{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <p>{!! $resource->description !!}</p>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
             
            </div>
            <div class="col-lg-4">
                <div class="courses-sidebar border  sticky-top z-0 rounded-2 overflow-hidden  " style="top: 110px;">
                    <div class="profile">
                        <img class="w-100 " src="{{asset('teacher/assets/images/PictoBlox_Python-1.png')}}" alt="">
                    </div>
                    <div class="p-4">
                        <a class="btn btn-start py-2 px-4 w-100 rounded-5 bg-primary text-white fw-bold" href="#">Start Course</a>
                        <h5 class="py-3">
                            Course Includes
                        </h5>
                        <p>
                            <i class="fa-solid fa-book"></i> 12 Lessons
                        </p>
                        <p>
                        <i class="fa-regular fa-address-book"></i> 49 Topics
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection