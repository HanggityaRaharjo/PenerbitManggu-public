<?php

namespace App\Exports;

use App\Models\dataroyalti;
use Maatwebsite\Excel\Concerns\FromCollection;

class dataroyaltiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return dataroyalti::all();
    }
}
