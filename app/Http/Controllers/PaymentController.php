<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Subscription;
use App\Services\PaymentService;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function redirect(Subscription $subscription) {

        $paymentHash = Str::random(40);
        $session = $this->paymentService->createPayment($subscription, $paymentHash);
        Payment::query()->create([
            'status' => $session->status,
            'subscription_id' => $subscription->id,
            'session_id' => $session->id,
            'hash' => $paymentHash
        ]);

        return redirect($session->url);
    }

    public function callback(string $hash)
    {
        $payment = Payment::query()->where('hash', $hash)->firstOrFail();
        $session = $this->paymentService->getPayment($payment->session_id);
        $status = $session->status;
        $payment->status = $status;
        $payment->save();

        if ($status === 'complete') {
            return redirect()->route('about.subscription');
        }

        return redirect()->route('about.subscription');
    }
}
