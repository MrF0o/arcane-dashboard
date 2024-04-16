<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;

class AIScanner extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-command-line';

    protected static string $view = 'filament.pages.ai-scanner';

    public function getTitle(): string|Htmlable
    {
        return "";
    }

    /**
     * @return string|null
     */
    public static function getNavigationLabel(): string
    {
        return "AI Code Scanner";
    }
}
