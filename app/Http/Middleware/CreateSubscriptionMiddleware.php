<?php

namespace App\Http\Middleware;

use App\Models\Membership;
use App\Models\Subscription;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CreateSubscriptionMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
	 */
	public function handle(Request $request, Closure $next): Response
	{
		$subTo = $request->input('subscribe-to');
		if ($subTo) {
			$membership = Membership::findOrFail($subTo);
			if ($membership) {
				Subscription::create([
					'free_trial' => false,
					'end_at' => Carbon::now()->addMonth(),
					'user_id' => $request->user()->id,
					'membership_id' => $membership->id
				]);

				return redirect()->to('/app');
			}
		}

		return $next($request);
	}
}
