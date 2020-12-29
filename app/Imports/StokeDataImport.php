<?php

namespace App\Imports;

use App\Models\StokeData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StokeDataImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new StokeData([
            'date'  => $row['date'],
            'trade_code'  => $row['trade_code'],
            'high'  => $row['high'],
            'low'  => $row['low'],
            'open'  => $row['open'],
            'close'  => $row['close'],
            'volume'  => $row['volume'],
        ]);
    }
}
