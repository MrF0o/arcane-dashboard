<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

	public function mount(): void {
		$this->form->fill();
	}

	public function mutateFormDataBeforeCreate(array $data): array
	{
		$data['supervisor_id'] = Auth::user()->id;
		return $data;
	}
}
