<?php

namespace App\Livewire\Settings;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\NewAccessToken;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ShowApiKeyModal extends Component
{
	public User $user;
	#[Reactive]
	public string $last_key = "";

	public function __construct()
	{
		$this->user = Auth::user();
	}

	public function renderWhen() {
		return $this->last_key != null;
	}

	public function render()
	{
		return view('livewire.settings.show-api-key-modal');
	}
}
