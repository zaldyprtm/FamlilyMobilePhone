<?php

namespace App\Filament\Resources\IphoneResource\Pages;

use App\Filament\Resources\IphoneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIphone extends EditRecord
{
    protected static string $resource = IphoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
