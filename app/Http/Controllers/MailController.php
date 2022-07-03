<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderPlacedMail;
use App\Mail\SalesUpdateMail;
use App\Mail\ReceivingInvoiceMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function sendOrderUpdate($name, $email,$order_id,$status,$date,$delivery_company,$tracking_num){

        $data = [
            'name' => $name,
            'email' => $email,
            'status'=>$status,
            'order_id'=>$order_id,
            'date'=>$date,
            'delivery_company'=>$delivery_company,
            'tracking_num'=>$tracking_num
        ];

     

        Mail::to($email)->send(new SalesUpdateMail($data));
    }

    public static function sendReceivingInvoice($name, $email,$receiving_id,$date){

        $data = [
            'name' => $name,
            'email' => $email,
            'receiving_id'=>$receiving_id,
            'date'=>$date
        ];

     

        Mail::to($email)->send(new ReceivingInvoiceMail($data));
    }

    
    public static function sendOrderPlaced($name,$email,$order_id,$date,$payment){

        $data = [
            'name' => $name,
            'email' => $email,
            'order_id'=>$order_id,
            'date'=>$date,
            'payment'=>$payment
            ];

     

        Mail::to($email)->send(new OrderPlacedMail($data));
    }


}
