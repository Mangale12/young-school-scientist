<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\AssignmentController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\TeacherResourceController;
use App\Http\Controllers\Admin\CourseController;

use Illuminate\Support\Facades\Route;
Route::get('/pre-k-kindergarten', [UserController::class, 'PreKindergarten'])->name('pre-k-kindergarten');
Route::get('/elementry', [UserController::class, 'Elementry'])->name('elementry');
Route::get('/middle', [UserController::class, 'Middle'])->name('middle');
Route::get('/', function () {
    return view('user/index');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/teacher', [AdminController::class, 'teacher'])->name('admin.teacher');
    Route::get('/admin/student', [AdminController::class, 'student'])->name('admin.student');
    Route::resource('schools', SchoolController::class);
    Route::resource('assignments', AssignmentController::class);
    Route::resource('groups', GroupController::class);
    Route::resource('teacher_resources', TeacherResourceController::class);
    Route::resource('courses', CourseController::class);

    // grade wise routes
    Route::get('/grade-one', [AdminController::class, 'GradeOne'])->name('admin.grade-one');
    Route::get('/grade-two', [AdminController::class, 'GradeTwo'])->name('admin.grade-two');
    Route::get('/grade-three', [AdminController::class, 'GradeThree'])->name('admin.grade-three');
    Route::get('/grade-four', [AdminController::class, 'GradeFour'])->name('admin.grade-four');
    Route::get('/grade-five', [AdminController::class, 'GradeFive'])->name('admin.grade-five');
    Route::get('/grade-six', [AdminController::class, 'GradeSix'])->name('admin.grade-six');
    Route::get('/grade-seven', [AdminController::class, 'GradeSeven'])->name('admin.grade-seven');
    Route::get('/grade-eight', [AdminController::class, 'GradeEight'])->name('admin.grade-eight');
    Route::get('/grade-nine', [AdminController::class, 'GradeNine'])->name('admin.grade-nine');
    Route::get('/grade-ten', [AdminController::class, 'GradeTen'])->name('admin.grade-ten');

    // assign courses
    Route::get('/courses/{course}/assign', [CourseController::class, 'showAssignForm'])->name('courses.assign');
    Route::post('/courses/{course}/assign', [CourseController::class, 'assignCourse']);


  
});

Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('/teacher/dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');
    Route::get('/teacher/courses/{id}', [TeacherController::class, 'courses'])->name('teacher.courses');

});

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/dashboard', [StudentController::class, 'index'])->name('student.dashboard');
    Route::get('/student/courses/{id}', [StudentController::class, 'show'])->name('courses.view');
});

Route::get('/student', function () {
    return view('student/index');
});

Route::get('/dashboard', function () {
    return view('admin/index');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
