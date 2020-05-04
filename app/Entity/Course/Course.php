<?php

namespace App\Entity\Course;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';

    public function videos()
    {
        return $this->hasMany(VideoCourse::class);
    }
}
