<?php

namespace App\Http\Controllers\NativeAPI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WafController extends Controller
{


	public function test() {
		return [
			'msg' => 'hello world'
 		];
	}
}
