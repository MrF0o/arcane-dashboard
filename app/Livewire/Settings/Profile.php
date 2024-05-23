<?php

namespace App\Livewire\Settings;

use App\Models\User;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Profile extends Component implements HasForms
{
	use InteractsWithForms;

	public ?array $data = [];
	public User $user;

	public function render()
	{
		return view('livewire.settings.profile');
	}

	public function mount(): void
	{
		$this->user = Auth::user();
		$this->form->fill($this->user->toArray());
	}

	public function form(Form $form): Form
	{
		return $form->schema([
			Section::make([
				TextInput::make('name')
					->label("Your name")
					->required(),
				TextInput::make("email")
					->label('Email')
					->required(),
				TextInput::make('password')
					->password()
					->confirmed()
					->revealable()
					->label('New Password'),
				TextInput::make('password_confirmation')
					->password()
					->revealable()
					->label('New Password'),
			]),
			Section::make([
				TextInput::make('current_password')
					->required()
					->password()
					->revealable()
					->currentPassword()
			])
				->heading("Old password")
		])->statePath('data')
			->model($this->user)
			->reactive();
	}

	public function save()
	{
		$data = $this->form->getState();
		$data['password'] = Hash::make($data['password']);
		$this->user->update($data);
		session()->put([
			'password_hash_web' => $this->user->password
		]);

		$this->form->fill($this->user->toArray());
		Notification::make('success')->success()->title('Updated!')->send();
	}
}
