<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogEntryResource\Pages;
use App\Filament\Resources\LogEntryResource\RelationManagers;
use App\Models\LogEntry;
use Doctrine\DBAL\Query;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class LogEntryResource extends Resource
{
    protected static ?string $model = LogEntry::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

	protected static ?string $recordTitleAttribute = 'logs';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canView(Model $record): bool
    {
        return true;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
	            Tables\Columns\TextColumn::make('site.domain')
		            ->color(Color::Blue),
	            Tables\Columns\TextColumn::make('created_at')
		            ->dateTime()
		            ->sortable(),
	            Tables\Columns\TextColumn::make('message')
	                ->color(Color::Red),
	            Tables\Columns\TextColumn::make('related_ip')
		            ->color(Color::Gray),
	            Tables\Columns\TextColumn::make('is_ip_banned')
		            ->badge()
		            ->formatStateUsing(fn ($state) => $state == "1" ? "yes" : "no")
		            ->color(Color::Gray),
                Tables\Columns\TextColumn::make('custom_rule_id')
                    ->numeric()
	                ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                Tables\Columns\TextColumn::make('match')
                    ->formatStateUsing(fn ($state) => new HtmlString("<code>" . e($state) ."</code>"))
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
	        ->modifyQueryUsing(fn (Builder $query) => $query->with('site'))
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListLogEntries::route('/'),
        ];
    }
}
