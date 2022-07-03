<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiReviewsController extends Controller
{
    public function store(Request $request)
    {



        $review = new Review;
        $review->rating = $request->rate;
        $review->comment = $request->message;
        $review->status = 'Pending';
        $review->product_id = $request->product_id;
        $review->customer_id = $request->logged_user;
        $review->save();

        if($review){
            return Response::json($review->id,200);
        }else{
            return Response(500);
        }
        
    }
}
