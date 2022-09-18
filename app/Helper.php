<?php
namespace App\Helper;

use App;

use Carbon\Carbon;

class Helper
{
    public static function getTimezone()
    {
        return 'Asia/Manila';
    }

    public static function getConvertedDateTimeAttribute($dateTime){
        $timezone = self::getTimezone();

        return Carbon::createFromTimestamp(strtotime($dateTime))
            ->timezone($timezone)
            ->format('M d, Y H:i:s');
    }

    public static function getConvertedDateAttribute($date){
        $timezone = self::getTimezone();
        return Carbon::parse($date)
            ->timezone($timezone)
            ->format('Y-m-d');
    }

    public static function getConvertedTimeAttribute($time){
        $timezone = self::getTimezone();

        return Carbon::parse($time)
            ->timezone($timezone)
            ->format('H:i:s');
    }

}
