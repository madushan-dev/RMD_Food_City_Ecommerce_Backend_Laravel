<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiMessageController extends Controller
{
    public function store(Request $request)
    {



        $message = new Message;
        $message->from = $request->from;
        $message->name = $request->name;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        if($message){
            return Response::json($message->id,200);
        }else{
            return Response(500);
        }
        
    }
}
