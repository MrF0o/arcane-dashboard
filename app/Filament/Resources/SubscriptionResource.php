<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubscriptionResource\Pages;
use App\Filament\Resources\SubscriptionResource\RelationManagers;
use App\Models\Membership;
use App\Models\Subscription;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SubscriptionResource extends Resource
{
	protected static ?string $model = Subscription::class;

	protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
	protected static ?string $navigationGroup = "Earnings";

	public static function form(Form $form): Form
	{
		return $form
			->schema([
				Forms\Components\DatePicker::make('end_at'),
				Forms\Components\Select::make('user_id')
					->label('User')
					->searchable()
					->options(User::all()->pluck('email', 'id'))
					->native(false)
					->preload(),
				Forms\Components\Select::make('membership_id')
					->label('Membership')
					->live()
					->options(Membership::all()->pluck('title', 'id'))
					->native(false)
					->preload(),
				Forms\Components\Toggle::make('free_trial')
					->visible(function (Forms\Get $get) {
						$id = $get('membership_id');
						if ($id) return Membership::find($id)->free_trial;
						return false;
					})
					->default(false)
					->columnSpanFull()
					->required(),
			]);
	}

	public static function table(Table $table): Table
	{
		return $table
			->columns([
				Tables\Columns\TextColumn::make('end_at')
					->date()
					->sortable(),
				Tables\Columns\IconColumn::make('free_trial')
					->boolean(),
				Tables\Columns\TextColumn::make('created_at')
					->dateTime()
					->sortable()
					->toggleable(isToggledHiddenByDefault: true),
				Tables\Columns\TextColumn::make('updated_at')
					->dateTime()
					->sortable()
					->toggleable(isToggledHiddenByDefault: true),
				Tables\Columns\TextColumn::make('user.email')
					->numeric()
					->sortable(),
				Tables\Columns\TextColumn::make('membership.title')
					->numeric()
					->sortable(),
			])
			->filters([
				//
			])
			->modifyQueryUsing(fn(Builder $query) => $query->with('user')->with('membership'))
			->actions([
				Tables\Actions\EditAction::make(),
			])
			->bulkActions([
				Tables\Actions\BulkActionGroup::make([
					Tables\Actions\DeleteBulkAction::make(),
				]),
			]);
	}

	public static function getRelations(): array
	{
		return [
			//
		];
	}

	public static function getPages(): array
	{
		return [
			'index' => Pages\ListSubscriptions::route('/'),
			'create' => Pages\CreateSubscription::route('/create'),
			'edit' => Pages\EditSubscription::route('/{record}/edit'),
		];
	}
}
