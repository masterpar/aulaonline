<?php

namespace App\Http\Controllers;

use App\Course;
use App\Review;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function show(Course $course)
    {
    	$course->load([
    		'category' => function ($q){
    			$q->select('id','name');
    		},
    		'goals' => function($q){
    			$q->select('id','course_id','goal');
    		},
    		'level' => function($q){
    			$q->select('id','name');
    		},
    		'requirements' => function($q){
    			$q->select('id','course_id','requirement');
    		},
    		'teacher',
    		'reviews.user',
    				 ])->get();


    	//->withCount('reviews', 'students')->where('slug',$course->slug)->get();
    	//$related = $course->relatedCourses();
        $populares = Course::where('status', Course::PUBLUSHED)
        ->orderBy('id','DESC')
        ->limit(3)
        ->get();
    	return view('cursos.curso',compact('course','populares'));
    }
}
