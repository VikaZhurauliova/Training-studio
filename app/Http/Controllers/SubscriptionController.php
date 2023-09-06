<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stripe\StripeClient;

class SubscriptionController extends Controller
{
    public function subscription()
    {
        $subscriptions = Subscription::all();

        return view('subscription', [
            'subscriptions' => $subscriptions
        ]);
    }

}

