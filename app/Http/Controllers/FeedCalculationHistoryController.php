<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CalculationHistory;
use App\Models\FeedCalculationHistory;

class FeedCalculationHistoryController extends Controller
{
    public function index()
    {
        $calculationHistories = FeedCalculationHistory::where('user_id', auth()->id())->orderBy('created_at', 'DESC')->paginate(10);
        return view('feeds_calculation_history', compact('calculationHistories'));
    }

    public function store(Request $request){
        return FeedCalculationHistory::create([
            'calculation_id' => strtoupper(Str::random(8)),
            'abw' => $request->abw,
            'feed_rate' => $request->feed_rate,
            'typs_of_feed' => $request->typs_of_feed,
            'survival_rate' => $request->survival_rate,
            'dfr' => $request->dfr,
            'monthly_dfr' => $request->monthly_dfr,
            'sacks_per_month' => $request->sacks_per_month,
            'size_of_fish' => $request->size_of_fish,
            'user_id' => auth()->id()
        ]);
    }
}
