<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Helper\Helper;
use Illuminate\Http\Request;
use App\Models\CalculationHistory;
use App\Models\FeedCalculationHistory;

class AdminCalculationHistoryController extends Controller
{
    public function pond_calculation_histories(){
        $users = User::all();
        return view('admin.calculation_histories.ponds.index', compact('users'));
    }

    public function getPondCalculationHistoryByUser($id){
        $user = User::find($id);
        $calculations = CalculationHistory::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();

        foreach($calculations as $item){
            $date_calculated =  Helper::getConvertedDateAttribute($item->created_at, 1);
            $item->date_time_calculated = $date_calculated;
            $item->date_transfer = Helper::getConvertedDateAttribute(Carbon::parse($date_calculated)->addMonth(2), 1);
        }


        return view('admin.calculation_histories.ponds.show', compact('calculations', 'user'));
    }
    public function feed_calculation_histories(){
        $users = User::all();
        return view('admin.calculation_histories.feeds.index', compact('users'));
    }

    public function getFeedCalculationHistoryByUser($id){
        $user = User::find($id);
        $calculations = FeedCalculationHistory::where('user_id', $user->id)->get();

        return view('admin.calculation_histories.feeds.show', compact('calculations', 'user'));
    }
}
