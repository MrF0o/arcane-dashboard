<?php

namespace App\Filament\Widgets;

use App\Models\ScanResult;
use App\Models\Site;
use Carbon\Carbon;
use Filament\Support\RawJs;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Facades\Auth;

class VulnChart extends ChartWidget
{
	protected static ?int $sort = 33;
    protected static ?string $heading = 'Vulnerabilities';
	protected static ?string $pollingInterval = '10s';
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

	protected function getOptions(): RawJs
	{
		return RawJs::make(<<<JS
        {
            scales: {
                y: {
                    ticks: {
                        precision: 0,
                    },
                    beginAtZero: true
                },
            },
        }
    JS
		);
	}

    protected function getData(): array
    {
		$query = ScanResult::whereHas('code_scan', fn ($query) => $query->whereHas('site', fn ($query) => $query->where('user_id', Auth::user()->id)->orWhere('user_id', Auth::user()->supervisor_id)));
		$data = Trend::query($query);

	    $activeFilter = $this->filter;

		if ($activeFilter == 'today') {
			$data = $data->between(
				start: now()->startOfDay(),
				end: now()->endOfDay()
			);
			$data = $data->perHour();
		}

		if ($activeFilter == 'week') {
			$data = $data->between(
				start: now()->startOfWeek(),
				end: now()->endOfWeek()
			);
			$data = $data->perDay();
		}

		if ($activeFilter == 'month') {
			$data = $data->between(
				start: now()->startOfMonth(),
				end: now()->endOfMonth()
			);
			$data = $data->perDay();
		}

	    if ($activeFilter == 'year') {
		    $data = $data->between(
			    start: now()->startOfYear(),
			    end: now()->endOfYear()
		    );
		    $data = $data->perMonth();
	    }

	    $data = $data->count();
	    return [
		    'datasets' => [
			    [
				    'label' => 'Vulnerabilities found',
				    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
			    ],
		    ],
		    'labels' => $data->map(fn (TrendValue $value) => $value->date),
	    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
