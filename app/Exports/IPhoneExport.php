<?php

namespace App\Exports;

use App\Models\IPhone;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class IPhoneExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return IPhone::all();
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
