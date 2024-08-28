<?php

namespace App\Exports;

use App\Models\Android;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class AndroidExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Android::all();
    }
    public function headings(): array
    {
        return [
            'id',
            'name',
            'price',
            'specification',
            'description',
            'image',
        ];
    }
}
