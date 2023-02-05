<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pond;
use App\Helper\Helper;
use PHPUnit\TextUI\Help;
use Illuminate\Http\Request;
use App\Models\MonitoringPond;
use App\Models\CalculationHistory;
use App\Models\FeedCalculationHistory;
use Illuminate\Contracts\Queue\Monitor;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $userId = auth()->id();
        $currentYear = $request->has('year') ? $request->year : date('Y');
        $firstMonitoringPond = MonitoringPond::first();
        $expectedHarvestDates = MonitoringPond::where('has_harvest', 0)->pluck('expected_date_harvest')->toArray();
        // return $expectedHarvestDates;
   
        $currentDate = Carbon::now()->toDateString();
        // $currentDate ='2023-04-30';
        $harvestDay = [];
        if(in_array($currentDate, $expectedHarvestDates)){
            $ponds = MonitoringPond::where('expected_date_harvest', $currentDate)->where('has_harvest', 0)->get();
            foreach($ponds as $pond){
                $harvestDay[] = [
                    'currentDate' => $currentDate,
                    'ponds_name' => $pond->ponds_name,
                ];
            }
        }

        $defaultPondId = null;
        if($firstMonitoringPond) $defaultPondId = $firstMonitoringPond->pond_id;
        $pond_id = $request->has('pond_id') ? $request->pond_id : $defaultPondId;

        $data = [
            'current_year' => $currentYear,
            'january' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'february' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'march' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'april' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'may' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'june' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'july' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'august' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'september' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'october' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'november' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
            'december' => [
                'abw' => 0,
                'stock_fingerlings' => 0,
                'mortality' => 0,
                'survived' => 0,
            ],
        ];


        $january = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '01')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $february = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '02')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $march = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '03')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $april = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '04')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $may = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '05')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $june = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '06')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $july = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '07')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $august = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '08')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $september = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '09')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $october = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '10')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $november = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '11')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $december = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '12')
            ->whereYear('date_started', $currentYear)
            ->where('pond_id', $pond_id)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        

        if (!empty($january) && !empty($january[0])) {
            $data['january'] = [
                'abw' => $january[0]->abw,
                'stock_fingerlings' => $january[0]->stock_fingerlings,
                'mortality' => $january[0]->mortality,
                'survived' => $january[0]->stock_fingerlings - $january[0]->mortality,
            ];
        }
        if (!empty($february) && !empty($february[0])) {
            $data['february'] = [
                'abw' => $february[0]->abw,
                'stock_fingerlings' => $february[0]->stock_fingerlings,
                'mortality' => $february[0]->mortality,
                'survived' => $february[0]->stock_fingerlings - $february[0]->mortality,
            ];
        }
        if (!empty($march) && !empty($march[0])) {
            $data['march'] = [
                'abw' => $march[0]->abw,
                'stock_fingerlings' => $march[0]->stock_fingerlings,
                'mortality' => $march[0]->mortality,
                'survived' => $march[0]->stock_fingerlings - $march[0]->mortality,
            ];
        }
        if (!empty($april) && !empty($april[0])) {
            $data['april'] = [
                'abw' => $april[0]->abw,
                'stock_fingerlings' => $april[0]->stock_fingerlings,
                'mortality' => $april[0]->mortality,
                'survived' => $april[0]->stock_fingerlings - $april[0]->mortality,
            ];
        }
        if (!empty($may) && !empty($may[0])) {
            $data['may'] = [
                'abw' => $may[0]->abw,
                'stock_fingerlings' => $may[0]->stock_fingerlings,
                'mortality' => $may[0]->mortality,
                'survived' => $may[0]->stock_fingerlings - $may[0]->mortality,
            ];
        }
        if (!empty($june) && !empty($june[0])) {
            $data['june'] = [
                'abw' => $june[0]->abw,
                'stock_fingerlings' => $june[0]->stock_fingerlings,
                'mortality' => $june[0]->mortality,
                'survived' => $june[0]->stock_fingerlings - $june[0]->mortality,
            ];
        }
        if (!empty($july) && !empty($july[0])) {
            $data['july'] = [
                'abw' => $july[0]->abw,
                'stock_fingerlings' => $july[0]->stock_fingerlings,
                'mortality' => $july[0]->mortality,
                'survived' => $july[0]->stock_fingerlings - $july[0]->mortality,
            ];
        }
        if (!empty($august) && !empty($august[0])) {
            $data['august'] = [
                'abw' => $august[0]->abw,
                'stock_fingerlings' => $august[0]->stock_fingerlings,
                'mortality' => $august[0]->mortality,
                'survived' => $august[0]->stock_fingerlings - $august[0]->mortality,
            ];
        }
        if (!empty($september) && !empty($september[0])) {
            $data['september'] = [
                'abw' => $september[0]->abw,
                'stock_fingerlings' => $september[0]->stock_fingerlings,
                'mortality' => $september[0]->mortality,
                'survived' => $september[0]->stock_fingerlings - $september[0]->mortality,
            ];
        }
        if (!empty($october) && !empty($october[0])) {
            $data['october'] = [
                'abw' => $october[0]->abw,
                'stock_fingerlings' => $october[0]->stock_fingerlings,
                'mortality' => $october[0]->mortality,
                'survived' => $october[0]->stock_fingerlings - $october[0]->mortality,
            ];
        }
        if (!empty($november) && !empty($november[0])) {
            $data['november'] = [
                'abw' => $november[0]->abw,
                'stock_fingerlings' => $november[0]->stock_fingerlings,
                'mortality' => $november[0]->mortality,
                'survived' => $november[0]->stock_fingerlings - $november[0]->mortality,
            ];
        }
        if (!empty($december) && !empty($december[0])) {
            $data['de$december'] = [
                'abw' => $december[0]->abw,
                'stock_fingerlings' => $december[0]->stock_fingerlings,
                'mortality' => $december[0]->mortality,
                'survived' => $december[0]->stock_fingerlings - $december[0]->mortality,
            ];
        }

       

        $ponds = Pond::all();

        return view('profile', compact('data', 'ponds', 'harvestDay'));
    }
}
