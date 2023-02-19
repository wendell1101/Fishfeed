<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\MonitoringPond;
use Illuminate\Support\Facades\DB;

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
        if($firstMonitoringPond) $defaultPondId = $firstMonitoringPond->id;
        $pond_id = $request->has('pond_id') ? $request->pond_id : $defaultPondId;
   
        $selectedPond = MonitoringPond::where('id',$pond_id)->first();
        $date_of_sampling = null;

        if($selectedPond){
            $date_of_sampling = $selectedPond->date_of_sampling;
        }

        $mortalityCount = 0;
        $survivedCount = 0;
        
        if($selectedPond){
            $mortalities = MonitoringPond::where('user_id', $userId)
            ->where('ponds_name', $selectedPond->ponds_name)
            ->whereYear('date_started', $currentYear)
            ->orderBy('created_at', 'DESC')
            ->get();

        
            $survivedCount = $selectedPond->stock_fingerlings;
            foreach($mortalities as $mortality){
                $mortalityCount += $mortality->mortality;
            }       

            $survivedCount -= $mortalityCount;
        }


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
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        $february = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '02')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        $march = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '03')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        $april = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '04')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $may = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '05')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $june = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '06')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $july = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '07')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $august = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '08')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $september = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '09')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $october = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '10')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $november = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '11')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();
        $december = MonitoringPond::where('user_id', $userId)
            ->whereMonth('date_started', '12')
            ->whereYear('date_started', $currentYear)
            ->where('id', $pond_id)
            ->where('date_of_sampling', $date_of_sampling)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get();

        if (!empty($january) && isset($january[0]) && !empty($january[0])) {
            $data['january'] = [
                'abw' => $january[0]->abw,
                'stock_fingerlings' => $january[0]->stock_fingerlings,
                'mortality' => $january[0]->mortality,
                'survived' => $january[0]->stock_fingerlings - $mortalityCount,
            ];
        }

        if (!empty($february) && !empty($february[0])) {
            $data['february'] = [
                'abw' => $february[0]->abw,
                'stock_fingerlings' => $february[0]->stock_fingerlings,
                'mortality' => $february[0]->mortality,
                'survived' => $february[0]->stock_fingerlings - $mortalityCount,
            ];
        }

        if (!empty($march) && !empty($march[0])) {
            $data['march'] = [
                'abw' => $march[0]->abw,
                'stock_fingerlings' => $march[0]->stock_fingerlings,
                'mortality' => $march[0]->mortality,
                'survived' => $march[0]->stock_fingerlings - $mortalityCount,
            ];
        }

        if (!empty($april) && !empty($april[0])) {
            $data['april'] = [
                'abw' => $april[0]->abw,
                'stock_fingerlings' => $april[0]->stock_fingerlings,
                'mortality' => $april[0]->mortality,
                'survived' => $april[0]->stock_fingerlings - $mortalityCount,
            ];
        }
        if (!empty($may) && !empty($may[0])) {
            $data['may'] = [
                'abw' => $may[0]->abw,
                'stock_fingerlings' => $may[0]->stock_fingerlings,
                'mortality' => $may[0]->mortality,
                'survived' => $may[0]->stock_fingerlings - $mortalityCount,
            ];
        }
        if (!empty($june) && !empty($june[0])) {
            $data['june'] = [
                'abw' => $june[0]->abw,
                'stock_fingerlings' => $june[0]->stock_fingerlings,
                'mortality' => $june[0]->mortality,
                'survived' => $june[0]->stock_fingerlings - $mortalityCount,
            ];
        }
        if (!empty($july) && !empty($july[0])) {
            $data['july'] = [
                'abw' => $july[0]->abw,
                'stock_fingerlings' => $july[0]->stock_fingerlings,
                'mortality' => $july[0]->mortality,
                'survived' => $july[0]->stock_fingerlings - $mortalityCount,
            ];
        }
        if (!empty($august) && !empty($august[0])) {
            $data['august'] = [
                'abw' => $august[0]->abw,
                'stock_fingerlings' => $august[0]->stock_fingerlings,
                'mortality' => $august[0]->mortality,
                'survived' => $august[0]->stock_fingerlings - $mortalityCount,
            ];
        }
        if (!empty($september) && !empty($september[0])) {
            $data['september'] = [
                'abw' => $september[0]->abw,
                'stock_fingerlings' => $september[0]->stock_fingerlings,
                'mortality' => $september[0]->mortality,
                'survived' => $september[0]->stock_fingerlings - $mortalityCount,
            ];
        }
        if (!empty($october) && !empty($october[0])) {
            $data['october'] = [
                'abw' => $october[0]->abw,
                'stock_fingerlings' => $october[0]->stock_fingerlings,
                'mortality' => $october[0]->mortality,
                'survived' => $october[0]->stock_fingerlings - $mortalityCount,
            ];
        }
        if (!empty($november) && !empty($november[0])) {
            $data['november'] = [
                'abw' => $november[0]->abw,
                'stock_fingerlings' => $november[0]->stock_fingerlings,
                'mortality' => $november[0]->mortality,
                'survived' => $november[0]->stock_fingerlings - $mortalityCount,
            ];
        }
        if (!empty($december) && !empty($december[0])) {
            $data['december'] = [
                'abw' => $december[0]->abw,
                'stock_fingerlings' => $december[0]->stock_fingerlings,
                'mortality' => $december[0]->mortality,
                'survived' => $december[0]->stock_fingerlings - $mortalityCount,
            ];
        }


        $ponds = MonitoringPond::where('user_id', auth()->id())->get();

        $ponds->map(function($item){
            if($item->date_of_sampling){
                $item->date_of_sampling_formatted = Carbon::parse($item->date_of_sampling)->format('F d, Y');
                $item->date_of_sampling_from_now = Carbon::createFromFormat('Y-m-d', $item->date_of_sampling)->diffForHumans();
            }
        });

        $authId = auth()->id();
        $summaries = DB::select( DB::raw("SELECT ponds_name, SUM(m.mortality) AS mortality_total, (m.stock_fingerlings - SUM(m.mortality)) as total_survived ,m.stock_fingerlings as stock_fingerlings, m.abw, m.user_id FROM `monitoring_ponds` as m where user_id=$authId group by ponds_name, stock_fingerlings, abw, user_id"));

        return view('profile', compact('data', 'ponds', 'harvestDay', 'survivedCount', 'mortalityCount', 'summaries'));
    }
}
