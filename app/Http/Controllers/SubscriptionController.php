<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class SubscriptionController extends Controller
{
	public function index(Request $request)
	{
		$memberships = Membership::all();
		return view('pages.subscribe', compact('memberships'));
	}

	public function redirect(Request $request, Membership $membership)
	{
		$konnect_api = "https://api.preprod.konnect.network/api/v2/payments/init-payment";
		$res = Http::withHeader('x-api-key', env('KONNECT_KEY'))->post($konnect_api, [
			'receiverWalletId' => '664e9b9e4cad1e76d530b62c',
			'amount' => $membership->price * 1000,
			'webhook' => url("/app?subscribe-to={$membership->id}")
		]);

		return Redirect::to($res->json()['payUrl']);
	}
}
