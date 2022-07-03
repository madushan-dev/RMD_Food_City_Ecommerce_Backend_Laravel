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
        return view('Employees.employees',[
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
        $validate = $request->validate([
            'first_name' =>'required',
            'last_name' =>'required',
            'profile_photo'=>'required',
            'address' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'user_type' =>'required',
            'password' => 'required',
        ]);


        $newImageName = time().".".$request->profile_photo->extension();
        $request->profile_photo->move(public_path('images/users'),$newImageName);


        $employee = Employee::create([
            'first_name' =>$request->input('first_name'),
            'last_name' =>$request->input('last_name'),
            'profile_photo'=>$newImageName,
            'address' =>$request->input('address'),
            'email' =>$request->input('email'),
            'phone' =>$request->input('phone'),
            'user_type' =>$request->input('user_type'),
            'password' => bcrypt($request->input('password'))
        ]);

        

        return redirect()->route('employees')->with('success','Employeer Successfully Added!');

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
            'phone'=>'required',
            'user_type'=>'required'
        ]);


        
        if($request->profile_photo != "" && $request->profile_photo !=null){
            $newImageName = time().".".$request->profile_photo->extension();
            $request->profile_photo->move(public_path('images/users'),$newImageName);
            $validate['profile_photo'] = $newImageName;
        }  


        $employee->update($validate);
        return redirect()->back()->with('success','Successfully Updated!');
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
        return redirect()->route('employees')->with('success','Successfully Deleted!');
    }

        /**
     * Add new customer
     */

    public function new(Employee $employee)
    {
        return view('Employees.new-employee');
    }

}
