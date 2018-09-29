<?php

namespace App\Policies;

use App\User;
use App\model;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
{
    use HandlesAuthorization;

  public function opt_for_course(User $user, Course $course)
  {
      return ! $user->teacher || $user->teacher->id !== $course->teacher_id;
  }
}
