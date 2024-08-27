<?php

namespace App\Filament\Resources\IphoneResource\Pages;

use App\Filament\Resources\IphoneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIphones extends ListRecords
{
    protected static string $resource = IphoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
