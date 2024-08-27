<?php

namespace App\Filament\Resources\AndroidResource\Pages;

use App\Filament\Resources\AndroidResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAndroids extends ListRecords
{
    protected static string $resource = AndroidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
