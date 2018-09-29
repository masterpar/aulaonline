<?php

namespace App;

use App\Course;
use App\User;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    protected $fillable = ['course_id','user_id','rating','comment'];

    public function course()
    {
    	return $this>belongsTo(Course::class);
    }

    public function user()
    {
    	return $this>belongsTo(User::class);
    }
}
