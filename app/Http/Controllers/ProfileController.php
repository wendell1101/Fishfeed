<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use App\Models\CalculationHistory;
use PHPUnit\TextUI\Help;
use Illuminate\Http\Request;
use App\Models\FeedCalculationHistory;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->id();
        $currentYear = $request->has('year') ? $request->year : date('Y');
        $data = [
            'current_year' => $currentYear,
            'first_day' => [
                'date' => 'N/A',
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'january' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'february' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'march' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'april' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'may' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'june' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'july' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'august' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'september' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'october' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'november' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
            'december' => [
                'abw' => 0,
                'dfr' => 0,
                'monthly_dfr' => 0,
            ],
        ];


        $tempFirstDay = FeedCalculationHistory::where('user_id', $userId)->whereYear('created_at', $currentYear)->orderBy('created_at', 'ASC')->limit(1)->get();

        if (!empty($tempFirstDay) && !empty($tempFirstDay[0])) {
            $firstDay = [
                'date' => Helper::getConvertedDateAttribute($tempFirstDay[0]->created_at, 1),
                'abw' => $tempFirstDay[0]->abw,
                'dfr' => $tempFirstDay[0]->dfr,
                'monthly_dfr' => $tempFirstDay[0]->monthly_dfr,
            ];
        }
        $january = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '01')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($january) && !empty($january[0])) {
            $data['january'] = [
                'abw' => $january[0]->abw,
                'dfr' => $january[0]->dfr,
                'monthly_dfr' => $january[0]->monthly_dfr,
            ];
        }

        $february = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '02')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($february) && !empty($february[0])) {
            $data['february'] = [
                'abw' => $february[0]->abw,
                'dfr' => $february[0]->dfr,
                'monthly_dfr' => $february[0]->monthly_dfr,
            ];
        }

        $march = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '03')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($march) && !empty($march[0])) {
            $data['march'] = [
                'abw' => $march[0]->abw,
                'dfr' => $march[0]->dfr,
                'monthly_dfr' => $march[0]->monthly_dfr,
            ];
        }

        $april = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '04')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($april) && !empty($april[0])) {
            $data['april'] = [
                'abw' => $april[0]->abw,
                'dfr' => $april[0]->dfr,
                'monthly_dfr' => $april[0]->monthly_dfr,
            ];
        }

        $may = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '05')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($may) && !empty($may[0])) {
            $data['may'] = [
                'abw' => $may[0]->abw,
                'dfr' => $may[0]->dfr,
                'monthly_dfr' => $may[0]->monthly_dfr,
            ];
        }

        $june = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '06')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($june) && !empty($june[0])) {
            $data['june'] = [
                'abw' => $june[0]->abw,
                'dfr' => $june[0]->dfr,
                'monthly_dfr' => $june[0]->monthly_dfr,
            ];
        }

        $july = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '07')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($july) && !empty($july[0])) {
            $data['july'] = [
                'abw' => $july[0]->abw,
                'dfr' => $july[0]->dfr,
                'monthly_dfr' => $july[0]->monthly_dfr,
            ];
        }

        $august = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '08')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($august) && !empty($august[0])) {
            $data['august'] = [
                'abw' => $august[0]->abw,
                'dfr' => $august[0]->dfr,
                'monthly_dfr' => $august[0]->monthly_dfr,
            ];
        }

        $september = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '09')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();


        if (!empty($september) && !empty($september[0])) {
            $data['september'] = [
                'abw' => $september[0]->abw,
                'dfr' => $september[0]->dfr,
                'monthly_dfr' => $september[0]->monthly_dfr,
            ];
        }

        $october = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '10')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($october) && !empty($october[0])) {
            $data['october'] = [
                'abw' => $october[0]->abw,
                'dfr' => $october[0]->dfr,
                'monthly_dfr' => $october[0]->monthly_dfr,
            ];
        }

        $november = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '11')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($november) && !empty($november[0])) {
            $data['november'] = [
                'abw' => $november[0]->abw,
                'dfr' => $november[0]->dfr,
                'monthly_dfr' => $november[0]->monthly_dfr,
            ];
        }

        $december = FeedCalculationHistory::where('user_id', $userId)
            ->whereMonth('created_at', '12')
            ->whereYear('created_at', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($december) && !empty($december[0])) {
            $data['december'] = [
                'abw' => $december[0]->abw,
                'dfr' => $december[0]->dfr,
                'monthly_dfr' => $december[0]->monthly_dfr,
            ];
        }


        return view('profile', compact('data'));
    }
}
