<?php

namespace App\UseCases\Section;
use App\Entity\Section;

class SectionListService
{
    public static function get()
    {
        return Section::all();
    }
}
