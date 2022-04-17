<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::get();
        return view('employees.employees',[
            'employees'=>$employees
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
        $employee = Employee::create([
            'first_name' =>$request->input('first_name'),
            'last_name' =>$request->input('last_name'),
            'address' =>$request->input('address'),
            'email' =>$request->input('email'),
            'phone' =>$request->input('phone'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('employees');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $employee->get();
       
        return view('Employees.single-employee',compact('employee','employee'));
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
    public function update(Request $request, Employee $employee)
    {
               $validate = $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required'
        ]);

        $employee->update($validate);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees');
    }

        /**
     * Add new customer
     */

    public function new(Employee $employee)
    {
        return view('Employees.new-employee');
    }

}
