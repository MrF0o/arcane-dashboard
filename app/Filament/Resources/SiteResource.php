<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteResource\Pages;
use App\Filament\Resources\SiteResource\RelationManagers;
use App\Models\Site;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class SiteResource extends Resource
{
    protected static ?string $model = Site::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('document_root')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('domain')
                    ->unique('sites', 'domain')
                    ->required(),
                Forms\Components\TextInput::make('port')
                    ->required()
                    ->numeric()
                    ->default(80),
                Forms\Components\Toggle::make('waf_enabled')
	                ->label("Enable WAF")
                    ->visible(Auth::user()->hasPermissionTo('TurnOffOnWaf'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('domain')
                    ->searchable(),
                Tables\Columns\TextColumn::make('port')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('waf_installed')
                    ->boolean(),
                Tables\Columns\IconColumn::make('waf_enabled')
                    ->boolean(),
                Tables\Columns\TextColumn::make('waf_version_id')
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
	        ->modifyQueryUsing(fn (Builder $query) => $query->where('user_id', Auth::user()->id)->orWhere('user_id', Auth::user()->supervisor_id))
            ->actions([
                Tables\Actions\EditAction::make(),
	            Tables\Actions\DeleteAction::make()
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

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSites::route('/'),
        ];
    }
}
