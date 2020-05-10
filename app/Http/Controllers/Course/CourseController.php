<?php


namespace App\Http\Controllers\Course;
use App\Entity\Course\Course;
use App\Entity\Course\VideoCourse;
use App\Http\Controllers\Controller;
use App\Jobs\Activition;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function list($id)
    {
        $listCourse = Course::findOrFail($id);
        return view('pages.list-course',['listCourse'=>$listCourse]);
    }

    public function more($id)
    {
        $more = VideoCourse::findOrFail($id);
        return view('pages.more-course',['more'=>$more]);
    }


}
