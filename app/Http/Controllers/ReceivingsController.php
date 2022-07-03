<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Receiving;
use Illuminate\Http\Request;
use App\Models\ReceivingItems;
use Illuminate\Support\Carbon;

class ReceivingsController extends Controller
{
    public function index()
    {
        $receivings = Receiving::with('suppliers')->get();


        return view('Receivings.receivings',[
            'receivings'=>$receivings
        ]);
    }

    public function show(Receiving $receiving)
    {

        $receiving->load('suppliers');
        $products = ReceivingItems::join('products','products.id','=','receiving_items.product_id')->join('receivings','receivings.id','=','receiving_items.receiving_id')->where('receivings.id','=',$receiving->id)->get();
        return view('Receivings.single-receiving',compact('receiving','products'));
    }

    public function new(Receiving $receiving)
    {
        $suppliers = Supplier::get();
        $products = Product::get();
        return view('Receivings.new-receiving',compact('suppliers','products'));
    }


    
    public function store(Request $request)
    { 

        $validate = $request->validate([
            'supplier_id'=>'required',
            'product_id'=>'required',
            'quantity'=>'required'
        ]);


        $receiving = Receiving::create([
        
            'date' =>$request->input('product_name'),
            'supplier_id' =>$request->input('supplier_id')
        ]);
        
   




        $product_id = $request->product_id;
        $quantity = $request->quantity;


        $length = count($product_id);
        for ($i = 0; $i < $length; $i++) {

        
    
            $product = ReceivingItems::create([
            
                'receiving_id' =>$receiving->id,
                'product_id' =>$product_id[$i],
                'quantity' =>$quantity[$i]
            ]);

            $product = Product::find($product_id[$i]);
            $product->count += $quantity[$i];
            $product->save();

  




        }


        $receiving->load('suppliers');

        $supplier_name = $receiving->suppliers->company;
        $supplier_email = $receiving->suppliers->email;
        $supplier_phone = $receiving->suppliers->phone;
        $receiving_id = $receiving->id;
        $date = Carbon::now();

        // Send Sms
        // SmsController::sendReceivingInvoice($supplier_name,$supplier_phone,$receiving_id,$date);

        // Send email
        // MailController::sendReceivingInvoice($supplier_name,$supplier_email,$receiving_id,$date);










    

        return redirect('/receivings/'.$receiving->id)->with('success','Products Receieved Successfully!');

    }
}
