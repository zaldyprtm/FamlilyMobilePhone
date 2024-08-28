<?php

namespace App\Filament\Resources\SimResource\Pages;

use Filament\Actions;
use App\Exports\SimExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Filament\Resources\SimResource;
use Filament\Resources\Pages\ListRecords;

class ListSims extends ListRecords
{
    protected static string $resource = SimResource::class;

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
        return Excel::download(new SimExport, 'sim.xlsx');
    }

    
}
