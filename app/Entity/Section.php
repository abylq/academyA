<?php

namespace App\Entity;
use App\Entity\Course\Course;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
