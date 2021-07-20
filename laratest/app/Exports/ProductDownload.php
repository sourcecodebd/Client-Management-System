<?php

namespace App\Exports;

use App\Physical_store_channel;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductDownload implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return physical_store_channel::all();
    }
}
