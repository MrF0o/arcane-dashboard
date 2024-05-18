<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WafVersionResource\Pages;
use App\Filament\Resources\WafVersionResource\RelationManagers;
use App\Models\WafVersion;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Support\Markdown;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;

class WafVersionResource extends Resource
{
    protected static ?string $model = WafVersion::class;
	protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

	public static function getNavigationLabel(): string
	{
		return "WAF Manager";
	}

	protected static ?string $breadcrumb = "WAF Manager";

	public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('waf_version_string')
	                ->label("WAF Version String"),
                Forms\Components\TextInput::make('waf_version_numeric')
	                ->label("WAF Version Number"),
                Forms\Components\Toggle::make('debug'),
                Forms\Components\FileUpload::make('binary_path')
	                ->label(fn () => new HtmlString("Release archive <code>.zip</code>"))
	                ->preserveFilenames()
	                ->acceptedFileTypes(['application/zip', 'application/octet-stream', 'application/x-zip-compressed', 'multipart/x-zip'])
	                ->maxSize(999999)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('platforms')
	                ->hint(fn () => new HtmlString("<code>Comma seperated list of platforms (win32, win64, linux, macos)</code>"))
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('waf_version_string')
                    ->searchable(),
                Tables\Columns\TextColumn::make('waf_version_numeric')
                    ->searchable(),
				Tables\Columns\TextColumn::make('binary_path')
					->label('Binary')
					->formatStateUsing(fn (string $state): Markdown => new Markdown('download'))
					->markdown()
					->color(Color::Blue)
	                ->url(fn (string $state, WafVersion $record): string => route('waf.download', $record->id)),
                Tables\Columns\IconColumn::make('debug')
                    ->boolean(),
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
            'index' => Pages\ListWafVersions::route('/'),
            'create' => Pages\CreateWafVersion::route('/create'),
            'edit' => Pages\EditWafVersion::route('/{record}/edit'),
        ];
    }
}
