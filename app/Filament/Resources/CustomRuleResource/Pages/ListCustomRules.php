<?php

namespace App\Filament\Resources\CustomRuleResource\Pages;

use App\Filament\Resources\CustomRuleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomRules extends ListRecords
{
    protected static string $resource = CustomRuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
