<?php

namespace App\Http\Controllers;

use App\Models\LogEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function checkToken(Request $request)
    {
        $membership = null;
        $user = $request->user();
        if ($user->subscribed() && !$user->hasRole("Super Admin")) {
            $membership = $user->subscriptions()->first()->membership()->get()->first();
            return [
                "membership_name" => $membership->title
            ];
        } else if ($user->hasRole("Super Admin")) {
            return [
                "membership_name" => "Super Admin"
            ];
        }

        return response([], 407);
    }

    public function siteConfig(Request $request)
    {
        $domain = $request->input("domain");
        $site = Auth::user()->sites()->where('domain', $domain)->get()->first();

        if ($site) {
            return response()->json($site);
        }

        return response([], 407);
    }

    public function log(Request $request)
    {
        $valid = $request->validate([
            'message' => ['required'],
            'related_ip' => ['required'],
            'ip_banned' => ['required'],
            'match' => ['required']
        ]);

        $json = $request->json();
        $site = null;

        if ($json->has('domain')) {
            $site = Auth::user()->sites()->where('domain', $json->get('domain'))->get()->first();
        } else {
            return response(status:  400)->json(['message' => 'Bad request']);
        }

        $valid['site_id'] = $site->id;
        $entry = LogEntry::create($valid);
        $entry->save();

        return response([], 200);
    }
}
