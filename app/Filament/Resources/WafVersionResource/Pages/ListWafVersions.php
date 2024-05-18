<?php

namespace App\Filament\Resources\WafVersionResource\Pages;

use App\Filament\Resources\WafVersionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWafVersions extends ListRecords
{
	protected static ?string $title = "WAF Manager";
    protected static string $resource = WafVersionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
