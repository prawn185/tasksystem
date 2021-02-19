<?php


namespace App\Http\Controllers;


use http\Client\Request;
use http\Client\Response;
use MongoDB\Driver\Exception\Exception;
use Statamic\View\View;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController
{

    public function Payment(){

        Stripe::setApiKey('sk_test_51ICMCJDi5gSuwPO0mTVZa5e95VWvfhqMm8tjw7pp41QIayeKyEBfTPG77yTguUB0CqqU3TpaqQQ3jhHvUoKWTNly00yp1COZ63');

        header('Content-Type: application/json');
        $YOUR_DOMAIN = 'http://newpos.lndo.site';
        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'unit_amount' => 2000,
                    'product_data' => [
                        'name' => 'Stubborn Attachments',
                        'images' => ["https://i.imgur.com/EHyR2nP.png"],
                    ],
                ],
                'quantity' => 1,
            ]],

            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/success.html',
            'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        ]);

        echo json_encode(['id' => $checkout_session->id]);

        return (new View)
            ->template('checkout')
            ->layout('layout')
            ->with(['title' => 'Checkout']);

    }
    public function Checkout(){


        return (new View)
            ->template('checkout')
            ->layout('layout')
            ->with(['title' => 'Checkout']);
    }

}
