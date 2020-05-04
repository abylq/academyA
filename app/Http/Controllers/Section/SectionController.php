<?php

namespace App\Http\Controllers\Section;

use App\Entity\Section;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Section\SectionRequest;
use App\UseCases\Section\SectionService;

class SectionController extends Controller
{

    private $service;

    public function __construct(SectionService $service)
    {
    	$this->service = $service;
    }

    public function show($id)
    {
        $listCourse = Section::findOrfail($id)->courses;
        return view('pages.courses',['listCourse'=>$listCourse]);
    }

    public function add(SectionRequest $request)
    {
    	$this->service->create($request);
    }

    public function edit(SectionRequest $request)
    {
    	$this->service->edit($request);
    }
}
