<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FeedCalculationHistory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getConvertedDateTimeAttribute($dateTime){
        $timezone = self::getTimezone();

        return Carbon::createFromTimestamp(strtotime($dateTime))
            ->timezone($timezone)
            ->format('M d, Y H:i:s');
    }

    public static function getTimezone()
    {
        return 'Asia/Manila';
    }
}
