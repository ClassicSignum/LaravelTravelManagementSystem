<?php

namespace App\Exports;

use App\Servicecharge;
use Maatwebsite\Excel\Concerns\FromCollection;

class SalarySheet implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Servicecharge::all();
    }
}
