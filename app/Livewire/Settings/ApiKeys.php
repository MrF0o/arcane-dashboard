<?php

namespace App\Livewire\Settings;

use App\Models\User;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\StaticAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\MaxWidth;
use Filament\Support\View\Components\Modal;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\NewAccessToken;
use Laravel\Sanctum\PersonalAccessToken;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class ApiKeys extends Component implements HasForms, HasTable, HasActions
{
	use InteractsWithForms;
	use InteractsWithTable;
	use InteractsWithActions;

	public User $user;
	public ?string $last_key = "";

	public function __construct()
	{
		$this->user = Auth::user();
	}

	public function createAction(): Action
	{
		return Action::make("create")
			->modalHeading("Create new API Key")
			->name("create")
			->form([
				TextInput::make("name")
					->required()
			])
			->modalWidth(MaxWidth::Small)
			->action(function ($data, $livewire) {
				$token = $this->user->createToken($data['name']);
				$this->last_key = $token->plainTextToken;
				$livewire->dispatch("open-modal", id: "show-api-key");
			});
	}

	public function table(Table $table): Table
	{
		return $table
			->relationship(fn(): MorphMany => $this->user->tokens())
			->columns([
				TextColumn::make('name'),
				TextColumn::make('token_representation')
					->label("Token")
					->view('filament.columns.api.api-key'),
				IconColumn::make("valid")
					->boolean(),
			])
			->filters([
				// ...
			])
			->actions([
				DeleteAction::make('delete')
			])
			->bulkActions([
				// ...
			])
			->emptyStateHeading("You have no API keys!");
	}

	public function render()
	{
		return view('livewire.settings.api-keys');
	}
}
