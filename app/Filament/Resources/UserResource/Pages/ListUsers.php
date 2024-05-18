<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ListUsers extends ListRecords
{
	protected static string $resource = UserResource::class;

	public function getTabs(): array
	{
		$tabs = [];
		if (Auth::user()->hasRole('Super Admin')) {
			$tabs[] = Tab::make('All Users');
		}

		$tabs[] = Tab::make('Team Users')
			->modifyQueryUsing(fn(Builder $query) => $query->where('supervisor_id', Auth::user()->id));

		return $tabs;
	}

	protected function getHeaderActions(): array
	{
		return [
			Actions\CreateAction::make(),
		];
	}
}
