<?php

namespace App\Exports;

use App\Models\Sim;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class SimExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sim::all();
    }
    
    public function headings(): array
    {
        return [
            'id',
            'name',
            'price',
            'image',
        ];
    }
}
