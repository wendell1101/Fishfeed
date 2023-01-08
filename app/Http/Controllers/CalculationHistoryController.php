<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Helper\Helper;
use Illuminate\Http\Request;
use App\Models\CalculationHistory;

class CalculationHistoryController extends Controller
{
    public function index()
    {
        $calculationHistories = CalculationHistory::where('user_id', auth()->id())->orderBy('created_at', 'DESC')->paginate(10);

        foreach($calculationHistories as $item){
            $date_calculated =  Helper::getConvertedDateAttribute($item->created_at, 1);
            $item->date_time_calculated = $date_calculated;
            $item->date_transfer = Helper::getConvertedDateAttribute(Carbon::parse($date_calculated)->addMonth(2), 1);
        }

        return view('calculation_history', compact('calculationHistories'));
    }

    public function store(Request $request){
        $request->validate([
            'calculation_name' => 'required',
            'result' => 'required',
        ]);

        return CalculationHistory::create([
            'calculation_name' => $request->calculation_name,
            'result' => $request->result,
            'user_id' => auth()->id()
        ]);
    }
}
