<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::withCount(['students'])
        ->with('category','teacher','reviews')
        ->where('status', Course::PUBLUSHED)
        ->latest()
        ->paginate(6);

    $populares = Course::where('status', Course::PUBLUSHED)
        ->orderBy('id','DESC')
        ->limit(3)
        ->get();
        return view('inicio', compact('courses','populares')); 
    }
}
