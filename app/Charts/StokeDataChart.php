<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\Http\Controllers\StokeDataController;
use App\Models\StokeData;
class StokeDataChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
      $stk = new StokeDataController();
      $data = $stk->chart($request->trade_code);
      //  $products = StockeData::all();
        return Chartisan::build()
            ->labels($data['date'])
            ->dataset('High', $data['high'])
            ->dataset('low', $data['low']);
    }
}
