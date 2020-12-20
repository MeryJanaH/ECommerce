<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class PayementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function showPaypage()
    {
        $pay_info = Session::get('pay_info');
        //dump($pay_info);
        //has not payed
        if($pay_info['status'] == "on_hold") {

            return view('website.backend.layouts.payment.paypage',['pay_info'=>$pay_info]);

        }
        else
        {
            return redirect()->route("boutique");
        }
        Session::forget('cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validate_payment($paypalPaymentId, $paypalPayerId)
    {
        $paypalEnv = 'sandbox';
        $paypalURL = 'https://api.sandbox.paypal.com/v1/';
        $paypalClientId = "AfGKpUUXTx91JusgwTm0v099gUjXWcWhaGvQukjql8hZxjh4AcKGFW7Pn5Nmkn1VIOL6ZvFw_zRdVKiV" ;
        $paypalSecret = "ELk8sFXjGk3WnBAw_7M_FWp_VlfMMNyQKRl58K1wBmWzmLgm0y5mPZi5rGziEDmk9IUscZ4JbGsROi87";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $paypalURL.'oauth2/token');
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_USERPWD, $paypalClientId . ":" . $paypalSecret);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

            $response = curl_exec($ch);
            curl_close($ch);


            if(empty($response)) {
                return false;
            }else{
                $jsonData = json_decode($response);
                $curl = curl_init($paypalURL . 'payments.payment/).$paypalPaymentId');
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_POST, false);
                curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_HTTPHEADER,array(
                    'Authorization: Bearer'.$jsonData->access_token,
                    'Accept: application/json',
                    'content-type: application/xml'
                ));

                $response = curl_exec($curl);
                curl_close($curl);

                //transaction data_cat
                $result = json_decode($response);
                return $result;
            }
    }


    public function storePaymentInfo($paypalPaymentId, $paypalPayerId)
    {
        $payment_info = Session::get('pay_info');
        $order_id = $payment_info['order_id'];
        $status = $payment_info['status'];
        $paypal_payment_id = $paypalPaymentId;
        $paypal_payer_id = $paypalPayerId;

        if($status == "on_hold")
        {
            $date = date("Y-m-d H:i:s");
            $newPaymentArray = array("order_id"=>$order_id,"date"=>$date,"amount"=>$payment_info['price'],"paypal_payment_id"=> $paypal_payment_id,"paypal_payer_id"=>$paypal_payer_id);
            $created_order = DB::table("payments")->insert($newPaymentArray);

            //update payment status
            DB::table('orders')->where('order_id', $order_id)->update(['status'=>'payé']);
        }
    }

    public function showPaymentReceipt($paypalPaymentId,$paypalPayerId)
    {
        if(!empty($paypalPaymentId) && !empty($paypalPayerId))
        {
            //return json -> contains transaction status
            $this -> validate_payment($paypalPaymentId, $paypalPayerId);
            $this -> storePaymentInfo($paypalPaymentId, $paypalPayerId);

            $payment_receipt = Session::get('payment_info');
            $payment_receipt['paypal_payment_id'] = $paypalPaymentId;
            $payment_receipt['paypal_payer_id'] = $paypalPayerId;

            //delete payment_info from sessions
            Session::forget("payment_info");
            return view('payment.paymentreceipt',['payment_receipt'=> $payment_receipt]);
        }
        else
        {
            return redirect()->route("boutique");
        }
    }
}
