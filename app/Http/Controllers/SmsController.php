<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{



    
    public static function sendOrderPlaced($name,$phone,$order_id,$date,$payment){

        $account_sid = "SendTest";
        $auth_token = "536|3JGkKmGoWiDHWwsdY5tPKTwqSw3DW4PDBxWDgwc9";


        $MSISDN = $phone;
        $SRC = $account_sid;
        $MESSAGE = "RMD Food City - Order Placed\n";
        $MESSAGE .= "Customer : ".$name. "\n";
        $MESSAGE .= "Order Id : ".$order_id. "\n";
        $MESSAGE .= "Date : ".$date. "\n";
        $MESSAGE .= "Total Payment : Rs ".$payment. ".00"."\n";
        $MESSAGE .= "Thank you for your order. Your order will be delivered soon!\n";
        



        $AUTH = $auth_token;
        
        $msgdata = array("recipient"=>$MSISDN, "sender_id"=>$SRC, "message"=>$MESSAGE);   
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sms.send.lk/api/v3/sms/send",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($msgdata),
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "authorization: Bearer $AUTH",
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
        ),
        ));


        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_exec($curl);
        curl_close($curl);
    

    }





    public static function sendOrderUpdate($name, $phone,$order_id,$status,$date,$delivery_company,$tracking_num){

        $account_sid = "SendTest";
        $auth_token = "536|3JGkKmGoWiDHWwsdY5tPKTwqSw3DW4PDBxWDgwc9";


        $MSISDN = $phone;
        $SRC = $account_sid;
        $MESSAGE = "RMD Food City - Order Update\n";
        $MESSAGE .= "Customer : ".$name. "\n";
        $MESSAGE .= "Order Id : ".$order_id. "\n";
        $MESSAGE .= "Status : ".$status. "\n";
        $MESSAGE .= "Date : ".$date. "\n";

        if($delivery_company !='' && $tracking_num !='' ){
            $MESSAGE .= "Delivery Company : ".$delivery_company. "\n";
            $MESSAGE .= "Tracking Number : ".$tracking_num. "\n";
        }


        $AUTH = $auth_token;
        
        $msgdata = array("recipient"=>$MSISDN, "sender_id"=>$SRC, "message"=>$MESSAGE);   
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sms.send.lk/api/v3/sms/send",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($msgdata),
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "authorization: Bearer $AUTH",
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
        ),
        ));


        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_exec($curl);
        curl_close($curl);
    

    }


    public static function sendReceivingInvoice($name, $phone,$receiving_id,$date){
        $account_sid = "SendTest";
        $auth_token = "536|3JGkKmGoWiDHWwsdY5tPKTwqSw3DW4PDBxWDgwc9";


        $MSISDN = $phone;
        $SRC = $account_sid;
        $MESSAGE = "RMD Food City - Order Update\n";
        $MESSAGE .= "Supplier  : ".$name. "\n";
        $MESSAGE .= "Receiving Id : ".$receiving_id. "\n";
        $MESSAGE .= "Date : ".$date. "\n";

    


        $AUTH = $auth_token;
        
        $msgdata = array("recipient"=>$MSISDN, "sender_id"=>$SRC, "message"=>$MESSAGE);   
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://sms.send.lk/api/v3/sms/send",
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($msgdata),
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "authorization: Bearer $AUTH",
            "cache-control: no-cache",
            "content-type: application/x-www-form-urlencoded",
        ),
        ));


        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_exec($curl);
        curl_close($curl);

    }
}
