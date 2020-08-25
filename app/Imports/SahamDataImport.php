<?php

namespace App\Imports;

use App\SahamData;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SahamDataImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        if(!SahamData::where('date', '=', $row['date'])->exists()) {
            return new SahamData([
                'date'  =>  $row['date'],
                'open'  =>  $row['open'],
                'high'  =>  $row['high'],
                'low'   =>  $row['low'],
                'close' =>  $row['close'],
                'volume'=>  $row['volume'],
            ]);
        }
    }
    
}
