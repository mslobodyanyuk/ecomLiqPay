<?php

namespace App\Http\Controllers;

use App\Order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Payment;


class CheckoutController extends Controller
{
//    public function step1()
//    {
//        if (Auth::check()) {
//            return redirect()->route('checkout.shipping');
//        }
//
//        return redirect('login');
//    }


    public function shipping()
    {
        return view('front.shipping-info');
    }

    public function payment()
    {
        $micro = sprintf("%06d",(microtime(true) - floor(microtime(true))) * 1000000); // Ну раз что-то нужно добавить для полной уникализации то ..
        $number = date("YmdHis");
        $order_id = $number.$micro;


/*you should point the `public_key` and `private_key`:*/
        $merchant_id=''; // public_key
        $signature=""; // private_key
/*you should point the `public_key` and `private_key`:*/

        $price = Cart::subtotal();

        $liqpay = new \LiqPay($merchant_id, $signature);
        $html = $liqpay->cnb_form(array(
            'version' => '3',
            'amount' => "$price",
            'currency' => 'UAH',     //can change  'EUR','UAH','USD','RUB','RUR'
            'description' => "test buying t-shirt from webstore using LiqPay payment system",  //Or change to $ desc "Purpose of payment, specify your"
            'sandbox' => '1',
/*you should point your site*/
            'result_url' => 'http://your-site/store-payment',
        ));

        return view('front.payment', compact('html'));

    }

 public static function storePayment(Request $request)
    {
        //Create the order
        Order::createOrder();

        //redirect user to some page
        return "Order completed";

    }


}
