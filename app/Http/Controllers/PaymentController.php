<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;

class PaymentController extends Controller
{
    public function paymentPost(Request $request)
    {

    Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" =>$request->sub*100,
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of southern online",
        ]);

        $newOrder=myOrder::Create([ //create new order in myOrder with the log in userID
            'paymentStatus'=>'Done',
            'userID'=>Auth::id(),
            'amount'=>$request->sub,
        ]);

        $orderID=DB::table('my_orders')->where('userID','=',Auth::id()->orderBy('created_at','desc')->first());  //get the order ID just now created

        $item=$request->input('cid');
        foreach($item as $item=>$value){
            $carts=myCart::find($value); // get the cart item record
            $carts->orderID=$orderID->id; //binding the orderID with cart item record
            $carts->save();
        }

        Session::flash('success','Orrder successfully! ');
        return back();
    }
}
