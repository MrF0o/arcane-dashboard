<?php

namespace App\Http\Controllers;

use App\Helpers\AICodeScanner;
use App\Helpers\OpenAI;
use App\Jobs\CodeScanJob;
use App\Models\CodeScan;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class CodeScannerController extends Controller
{

	public function start_scan(Request $request)
	{
		// create a new CodeScan
		$scan = CodeScan::create([
			'user_id' => Auth::user()->id,
		]);

		// TODO: website technologies for now (php, nodejs, laravel, javaEE, Python)
		// TODO: exclude files
		// TODO: only scan files

		$site = Site::find(2); // static for now
		CodeScanJob::dispatch($site, $scan);
	}
}
