<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssignmentResource\Pages;
use App\Filament\Resources\AssignmentResource\RelationManagers;
use App\Models\Assignment;
use App\Models\CodeScan;
use App\Models\ScanResult;
use Filament\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Symfony\Component\Console\Input\Input;
use Wiebenieuwenhuis\FilamentCodeEditor\Components\CodeEditor;

class AssignmentResource extends Resource
{
    protected static ?string $model = Assignment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\Select::make('admin_id')
                    ->relationship('admin', 'name')
                    ->required(),
                Forms\Components\TextInput::make('scan_result_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'fixed' => 'Fixed',
                        'false' => 'False Positive'
                    ])
                    ->native(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('admin.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('scan_result_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'danger',
                        'fixed' => 'success',
                        'false' => 'info'
                    })
                    ->searchable(),
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
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\Action::make('Mark as Fixed')->icon('heroicon-o-check')
                        ->visible(fn(Assignment $record) => $record->status == 'pending')
                        ->requiresConfirmation()
                        ->action(fn(Assignment $record) => $record->update(['status' => 'fixed'])),
                    Tables\Actions\Action::make('Mark as False Positive')->icon('heroicon-o-x-mark')
                        ->visible(fn(Assignment $record) => $record->status == 'pending')
                        ->requiresConfirmation()
                        ->action(fn($livewire) => $livewire->getMountedTableActionRecord()->update(['status' => 'false'])),
                    Tables\Actions\ViewAction::make()->form([
                        Forms\Components\TextInput::make("title"),
                        Forms\Components\Textarea::make("description")->autosize(),
                        CodeEditor::make('code')->label('Vulnerable Snippet')->disabled(),
                    ])->mutateRecordDataUsing(function (array $data): array {
                        $result = ScanResult::where('id', $data['scan_result_id'])->get()->first();
                        $data['code'] = $result->vulnerable_snippets;
                        $data['title'] = $result->title . "   (file: {$result->file_path})";
                        $data['description'] = $result->ai_note;
                        return $data;
                    }),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->modifyQueryUsing(fn($query) => Auth::user()->isSuperAdmin() ? $query : $query->where('user_id', Auth::user()->id));
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAssignments::route('/'),
        ];
    }
}
