<?php

namespace App\Filament\Resources\SiteResource\Pages;

use App\Filament\Resources\SiteResource;
use App\Models\Site;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListSites extends ListRecords
{
	protected static string $resource = SiteResource::class;

	protected function getHeaderActions(): array
	{
		return [
			Actions\CreateAction::make()
				->mutateFormDataUsing(function (array $data): array {
					$data['user_id'] = auth()->id();

					return $data;
				}),
		];
	}
}
