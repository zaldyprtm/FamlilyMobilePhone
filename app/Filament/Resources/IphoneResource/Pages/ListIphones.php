<?php

namespace App\Filament\Resources\IphoneResource\Pages;

use Filament\Actions;
use App\Exports\IPhoneExport;
use Maatwebsite\Excel\Facades\Excel;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\IphoneResource;

class ListIphones extends ListRecords
{
    protected static string $resource = IphoneResource::class;

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
        return Excel::download(new IPhoneExport, 'iphone.xlsx');
    }
}
