<?php

namespace App\Filament\Resources\CustomRuleResource\Pages;

use App\Filament\Resources\CustomRuleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomRule extends EditRecord
{
    protected static string $resource = CustomRuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
