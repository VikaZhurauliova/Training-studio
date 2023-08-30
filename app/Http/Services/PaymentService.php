<?php

namespace App\Http\Services;

use App\Models\Subscription;
use Stripe\StripeClient;

class PaymentService
{
    private StripeClient $stripe;
    public function __construct()
    {

        $this->stripe = new StripeClient(config('services.stripe.secret_key'));

    }

    public function createPayment(Subscription $subscription, string $paymentHash)
    {
        $session = $this->stripe->checkout->sessions->create([
            'success_url' => route('payment.callback', ['hash' => $paymentHash]),
            'cancel_url' => url()->previous(),
            'line_items' => $this->subscriptionGeneration($subscription),
            'mode' => 'payment',
        ]);

        return $session;
    }

    public function subscriptionGeneration(Subscription $subscription) {
        $items[] = [
            'price_data' => [
                'currency' => 'USD',

                'product_data' => [
                    'name' => $subscription->name,
                    'description' => $subscription->description,
                    'price' => $subscription->price,
                ],
                'unit_amount' =>  $subscription->price * 100,
            ],
            'quantity' => 2,
        ];
        return $items;
    }

    public function getPayment(string $id) {
        return $this->stripe->checkout->sessions->retrieve(
            $id
        );
    }
}

