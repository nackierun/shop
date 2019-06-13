<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    //
    public function stripe()
    {
        return view('customers.stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_TT9sDAOvBYcx1CVIYu4y7Paj00ZWtAdMqh');
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test"
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
