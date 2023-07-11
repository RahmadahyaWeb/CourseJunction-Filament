<?php

use App\Models\Course;
use App\Models\Material;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route show course
Route::get('/courses/{course}', function (Course $course) {
    $courseMaterials = Material::where('course_id', $course->id)->get();
    
    return view('courses.show-course', compact('course', 'courseMaterials'));
})->name('courses.show');
