<?php


namespace App\Jobs;


class Activition
{
    const DATE = 'Y-m-d H:i:s';

    public static function checkTime()
    {
        $start = strtotime(date(self::DATE));
        $end = date(self::DATE,strtotime('+5 minutes'));
        $end = strtotime($end);
        if($start >= 1588679757)
        {
            return 1;
        }
        return [$start,$end];
    }
}
