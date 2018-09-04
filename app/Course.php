<?php

namespace App;

use App\Category;
use App\Goal;
use App\Level;
use App\Requirement;
use App\Review;
use App\Teacher;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    const PUBLUSHED = 1;
    const PENDING = 2;
    const REJECTED = 3;

    public function category()
    {
    	return $this->belongsTo(Category::class)->select('id','name');
    }

     public function goals()
    {
    	return $this->hasMany(Goal::class)->select('id','course_id','goal');
    }

    public function level()
    {
    	return $this->belongsTo(Level::class)->select('id','name');
    }

    public function reviews()
    {
    	return $this->hasMany(Review::class)->select('user_id','course_id','rating','comment','created_at');
    }

    public function requirements()
    {
    	return $this->hasMany(Requirement::class)->select('id','course_id','requirement');
    }

    public function students()
    {
    	return $this->belongsToMany(Student::class);
    }

     public function teacher()
    {
    	return $this->belongsTo(Teacher::class);
    }

}