<?php

namespace App\Filament\Pages;

use App\Jobs\CodeScanJob;
use App\Models\CodeScan;
use App\Models\Site;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Auth;

class AIScanner extends Page implements HasForms
{
	protected static ?string $navigationIcon = 'heroicon-o-command-line';

	protected static string $view = 'filament.pages.ai-scanner';

	// TODO: change these
	public static int $INITIAL_SCANS_SHOWN = 3;
	public static int $INITIAL_SCANS_INCR = 1;

	public ?CodeScan $selected_scan;
	public int $showMax = 3;
	public bool $showMoreClicked = false;

	public function scans() {
		return Auth::user()->code_scans();
	}

	public function increaseLoadMax() {
		$this->showMax += self::$INITIAL_SCANS_INCR;
		$this->showMoreClicked = true;
	}

	public function showLess() {

	}

	public function getTitle(): string|Htmlable
	{
		return "";
	}

	public function scanAction(): Action
	{
		return Action::make('scan')
			->label('New scan')
			->form([
				TextInput::make('user_id')
					->default(Auth::user()->id)
					->hidden(),
//				TextInput::make('Include files'),
//				TextInput::make('Exclude files'),
				Select::make('language')
					->label('Programming language')
					->required()
					->native(false)
					->options([
						'ai' => 'Let AI decide',
						'node' => 'Node.js',
						'laravel' => 'Laravel',
						'php' => 'PHP',
						'jee' => 'JavaEE',
						'python' => 'Python'
					]),
				Select::make('site_id')
					->label("Website")
					->relationship(name: "sites", titleAttribute: "domain")
					->native(false)
					->placeholder("Select a website")
					->searchingMessage("Searching websites")
					->required()
					->searchable()
			])
			->modalSubmitActionLabel("Start scan")
			->color('gray')
			->modal()
			->action(function ($data) {
				$data['user_id'] = Auth::user()->id;
				$scan = CodeScan::create($data);
				$scan->save();
				$site = Site::find($data['site_id']);
				CodeScanJob::dispatch($site, $scan);
			})
			->model(User::class)
			->modalWidth('lg');
	}

	/**
	 * @return string|null
	 */
	public static function getNavigationLabel(): string
	{
		return "AI Code Scanner";
	}

	public function selectScan(CodeScan $scan) {
		$this->selected_scan = $scan;
	}

	public function trashScan(CodeScan $scan): void
	{
		$this->selected_scan = null;
		$scan->delete();
	}

}
