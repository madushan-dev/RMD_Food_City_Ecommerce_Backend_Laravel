<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::get();
        return view('Customers.customers',[
            'customers'=>$customers
        ]);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'profile_photo'=>'required',
            'address' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'password' => 'required',
        ]);

        
        $newImageName = time().".".$request->profile_photo->extension();
        $request->profile_photo->move(public_path('images/users'),$newImageName);


        $customer = Customer::create([
            'first_name' =>$request->input('first_name'),
            'last_name' =>$request->input('last_name'),
            'profile_photo'=>$newImageName,
            'address' =>$request->input('address'),
            'email' =>$request->input('email'),
            'phone' =>$request->input('phone'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('customers')->with('success','Customer Successfully Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $customer->get();
        return view('Customers.single-customer',compact('customer','customer'));
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
    public function update(Request $request, Customer $customer)
    {
        $validate = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);

        if($request->profile_photo != "" && $request->profile_photo !=null){
            $newImageName = time().".".$request->profile_photo->extension();
            $request->profile_photo->move(public_path('images/users'),$newImageName);
            $validate['profile_photo'] = $newImageName;
        }  



        $customer->update($validate);
        return redirect()->back()->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers')->with('success','Successfully Deleted!');
    }

    /**
     * Add new customer
     */

    public function new(Customer $customer)
    {
        return view('Customers.new-customer');
    }

}



