<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                {{-- <img src="{{asset('admin-dashboard/assets/images/logo.png')}}" alt="" class="avatar-md rounded-circle"> --}}
                <img src="{{asset('admin-dashboard/assets/images/users/avatar-1.jpg')}}" alt="avatar" class="avatar-md rounded-circle" >
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>
        

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">MENU</li>

                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-table-2"></i>
                        <span>List user</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li><a href="{{route('admin.teacher')}}">Teacher</a></li>
                        <li><a href="{{route('admin.student')}}">Students</a></li>
                    </ul>
                </li>
                  
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-share-line"></i>
                        <span>Assign</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                     
                        <li><a href="javascript: void(0);" class="has-arrow">Courses to Student</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);">Class 1 Courses to Grade 1 Students</a></li>
                                <li><a href="javascript: void(0);">Class 2 Courses to Grade 2 Students</a></li>
                                <li><a href="javascript: void(0);">Class 3 Courses to Grade 3 Students</a></li>
                                <li><a href="javascript: void(0);">Class 4 Courses to Grade 4 Students</a></li>
                                <li><a href="javascript: void(0);">Class 5 Courses to Grade 5 Students</a></li>
                                <li><a href="javascript: void(0);">Class 6 Courses to Grade 6 Students</a></li>
                                <li><a href="javascript: void(0);">Class 7 Courses to Grade 7 Students</a></li>
                                <li><a href="javascript: void(0);">Class 8 Courses to Grade 8 Students</a></li>
                                <li><a href="javascript: void(0);">Class 9 Courses to Grade 9 Students</a></li>
                                <li><a href="javascript: void(0);">Class 10 Courses to Grade 10 Students</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);">Courses to Group</a></li>
                        <li><a href="javascript: void(0);">Group to Class</a></li>
                        <li><a href="javascript: void(0);">Courses to Teacher</a></li>
                        <li><a href="javascript: void(0);">Teacher Resources to Teacher</a></li>
                       
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-table-2"></i>
                        <span>Grade</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        
                        <li><a href="{{route('admin.grade-one')}}">Grade One</a></li>
                        <li><a href="{{route('admin.grade-two')}}">Grade Two</a></li>
                        <li><a href="{{route('admin.grade-three')}}">Grade Three</a></li>
                        <li><a href="{{route('admin.grade-four')}}">Grade Four</a></li>
                        <li><a href="{{route('admin.grade-five')}}">Grade Five</a></li>
                        <li><a href="{{route('admin.grade-six')}}">Grade Six</a></li>
                        <li><a href="{{route('admin.grade-seven')}}">Grade Seven</a></li>
                        <li><a href="{{route('admin.grade-eight')}}">Grade Eight</a></li>
                        <li><a href="{{route('admin.grade-nine')}}">Grade Nine</a></li>
                        <li><a href="{{route('admin.grade-ten')}}">Grade Ten</a></li>

                        
                    </ul>
                </li>
                <li>
                    <a href="{{route('schools.index')}}" class=" waves-effect">
                    <i class="ri-table-2"></i>
                        <span>Schools</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('assignments.index')}}" class=" waves-effect">
                        <i class="ri-table-2"></i>
                        <span>Assignment</span>
                    </a>
                  
                </li>
                <li>
                    <a href="{{route('groups.index')}}" class=" waves-effect">
                    <i class="ri-table-2"></i>
                        <span>Groups</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('teacher_resources.index')}}" class=" waves-effect">
                    <i class="ri-table-2"></i>
                        <span>Teacher Resources</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('courses.index')}}" class=" waves-effect">
                    <i class="ri-table-2"></i>
                        <span>Course</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>