<?php

namespace App\Filament\Resources\AndroidResource\Pages;

use Filament\Actions;
use App\Exports\AndroidExport;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\AndroidResource;

class ListAndroids extends ListRecords
{
    protected static string $resource = AndroidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('export')
            ->label('Export to excel')
            ->action('export')
            ->color('success')
        ];
    }


    public function export()
    {
        return Excel::download(new AndroidExport, 'android.xlsx');
    }
}
