<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class VulnChart extends ChartWidget
{
	protected static ?int $sort = 33;
    protected static ?string $heading = 'Vulnerabilities';
	protected static bool $isLazy = false;
	public ?string $filter = 'week';
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
	    $activeFilter = $this->filter;

		if ($activeFilter == 'today') {
			$label = ['6-10', '10-14', '14-18', '18-22', '22-2', '2-6'];
		}

		if ($activeFilter == 'week') {
			$label = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
		}

		if ($activeFilter == 'month') {

		}

		if ($activeFilter == 'yes') {

		}

	    return [
		    'datasets' => [
			    [
				    'label' => 'Vulnerabilities found',
				    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
			    ],
		    ],
		    'labels' => $label,
	    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
