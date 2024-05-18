<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class AttacksBlockedChart extends ChartWidget
{
    protected static ?string $heading = 'Attacks Blocked';
	protected static bool $isLazy = false;
	protected static ?int $sort = 99;
	protected function getFilters(): ?array
	{
		return [
			'today' => 'Today',
			'week' => 'Last week',
			'month' => 'Last month',
			'year' => 'This year',
		];
	}

    protected function getData(): array
    {
	    return [
		    'datasets' => [
			    [
				    'label' => 'Vulnerabilities found',
				    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
			    ],
		    ],
		    'labels' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
	    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
