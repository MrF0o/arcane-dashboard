<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomRuleResource\Pages;
use App\Filament\Resources\CustomRuleResource\RelationManagers;
use App\Models\CustomRule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class CustomRuleResource extends Resource
{
	protected static ?string $model = CustomRule::class;

	protected static ?string $navigationIcon = 'heroicon-o-no-symbol';
	protected static ?string $recordTitleAttribute = 'custom rule';

	private static array $fields = [
		"Request" => [
			'REQUEST_BODY' => 'Request Body'
		]
	];

	public static function form(Form $form): Form
	{
		return $form
			->schema([
				Forms\Components\Section::make('Constraints')->schema([
					Forms\Components\Select::make('field')
						->options(self::$fields)
						->native(false)
						->required(),
					Forms\Components\Select::make('operator')
						->options([
							'EQUAL_TO' => '"==" Equal to',
							'INCLUDES' => '"has" Includes',
							'ONE_OF' => '"in" One of',
							'LESS_THAN' => '"<" Less than',
							'GREATER_THAN' => '">" Greater than',
							'LESS_THAN_OR_EQUAL_TO' => '"<=" less than or equal to',
							'GREATER_THAN_OR_EQUAL_TO' => '">=" greater than or equal to'
						])
						->native(false)
						->required(),
					Forms\Components\TextInput::make('value')
						->required(),
				])->columns(3),

				Forms\Components\Section::make('Details')->schema([
					Forms\Components\TextInput::make('name')
						->required(),
					Forms\Components\Textarea::make('description')
						->columnSpanFull(),
					Forms\Components\Textarea::make('log_message')
						->required()
						->columnSpanFull(),
				]),
				Forms\Components\Section::make('Options')->schema([
					Forms\Components\Select::make('action')
						->options(['BLOCK' => "Block request", 'PASS' => 'Pass request'])
						->native(false)
						->required(),
					Forms\Components\Toggle::make('is_chained')
						->live()
						->required(),
					Forms\Components\Select::make('severity')
						->native(false)
						->required()
						->default('critical')
						->options([
							'critical' => 'CRITICAL',
							'warning' => 'WARNING',
							'error' => 'ERROR',
							'notice' => 'NOTICE'
						]),
					Forms\Components\Toggle::make('capture')
						->required(),
					Forms\Components\Select::make('parent_id')
						->visible(fn(Forms\Get $get): bool => $get('is_chained'))
						->required()
						->native(false)
						->options(CustomRule::all()->pluck('id', 'name')),
				])
			]);
	}

	public static function table(Table $table): Table
	{
		return $table
			->columns([
				Tables\Columns\TextColumn::make('name')
					->searchable(),
				Tables\Columns\TextColumn::make('value')
					->searchable(),
				Tables\Columns\TextColumn::make('field')
					->searchable(),
				Tables\Columns\TextColumn::make('action')
					->searchable(),
				Tables\Columns\TextColumn::make('operator')
					->searchable(),
				Tables\Columns\IconColumn::make('is_chained')
					->boolean(),
				Tables\Columns\TextColumn::make('severity')
					->badge()
					->color(fn (string $state): string => match ($state) {
						'critical' => 'danger',
						'warning' => 'warning',
						'error' => 'info',
						'notice' => 'gray',
					})
					->searchable(),
				Tables\Columns\IconColumn::make('capture')
					->boolean(),
				Tables\Columns\TextColumn::make('parent_id')
					->numeric()
					->sortable(),
				Tables\Columns\TextColumn::make('created_at')
					->dateTime()
					->sortable()
					->toggleable(isToggledHiddenByDefault: true),
				Tables\Columns\TextColumn::make('updated_at')
					->dateTime()
					->sortable()
					->toggleable(isToggledHiddenByDefault: true),
			])
			->filters([
				//
			])
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
			'index' => Pages\ListCustomRules::route('/'),
			'create' => Pages\CreateCustomRule::route('/create'),
			'edit' => Pages\EditCustomRule::route('/{record}/edit'),
		];
	}
}
