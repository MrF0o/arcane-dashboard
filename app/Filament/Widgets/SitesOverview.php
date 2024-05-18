<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\HtmlString;

class SitesOverview extends BaseWidget
{
	protected static bool $isLazy = false;
    protected function getStats(): array
    {
	    return [];
    }
}
