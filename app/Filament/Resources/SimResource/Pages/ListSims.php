<?php

namespace App\Filament\Resources\SimResource\Pages;

use App\Filament\Resources\SimResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSims extends ListRecords
{
    protected static string $resource = SimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
