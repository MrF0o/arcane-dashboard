<?php

namespace App\Filament\Resources\WafVersionResource\Pages;

use App\Filament\Resources\WafVersionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWafVersion extends EditRecord
{
    protected static string $resource = WafVersionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
