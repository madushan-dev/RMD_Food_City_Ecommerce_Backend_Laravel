<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::get();
        return view('Suppliers.suppliers',[
            'suppliers'=>$suppliers
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
            'company'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);


        $supplier = Supplier::create([
            'company' =>$request->input('company'),
            'address' =>$request->input('address'),
            'email' =>$request->input('email'),
            'phone' =>$request->input('phone')
        ]);

        return redirect()->route('suppliers')->with('success','Supplier Successfully Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        $supplier->get();
        return view('Suppliers.single-supplier',compact('supplier','supplier'));
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
    public function update(Request $request, Supplier $supplier)
    {
        $validate = $request->validate([
            'company'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);

        $supplier->update($validate);
        return redirect()->back()->with('success','Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers')->with('success','Successfully Deleted!');
    }

    /**
     * Add new customer
     */

    public function new(Supplier $supplier)
    {
        return view('Suppliers.new-supplier');
    }
}
