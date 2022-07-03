<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\ValidationException;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {

        $customer = Customer::where('email', $request->email)->first();
 
        if (! $customer || ! Hash::check($request->password, $customer->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
        $token =  $customer->createToken($customer->email.'_Token')->plainTextToken;

        return Response::json([
            'status'=>200,
            'cus_name'=>$customer->first_name,
            'cus_id'=>$customer->id,
            'token'=>$token,
            'message'=>'Logged in successfully'

        ]);
        
    }

    public function register(Request $request)
    {


    
      


        $customer = new Customer();

        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address = $request->address;


        if($request->file('profile_photo') != "" && $request->file('profile_photo') !=null){
            $newImageName = time().".".$request->file('profile_photo')->extension();
            $request->file('profile_photo')->move(public_path('images/users'),$newImageName);
            $customer->profile_photo = $newImageName;
        }


        $customer->password = Hash::make($request->password);

        $customer->save();
        
        Customer::where('id', $customer->id)->update(['affiliate_id'=> 'RMD-'. $customer->id]);

        $token =  $customer->createToken($customer->email.'_Token')->plainTextToken;

        if($customer){
            return Response::json([
                'status'=>200,
                'cus_name'=>$customer->first_name,
                'cus_id'=>$customer->id,
                'token'=>$token,
                'message'=>'Registered successfully'

            ]);
        }else{
            return Response::json(400);
        }
      
    }

    
    public function loadcustomer(Request $request)
    {
        $customer = Customer::where('id', $request->id)->first();
        return Response::json( $customer);
    }

    public function editcustomer(Request $request)
    {
     
        $customer = Customer::where('id', $request->id)->first();
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $password = $request->password;

        if($first_name && $first_name !='' && $first_name !=null && $first_name !='undefined'){
            Customer::where('id', $request->id)->update(['first_name'=> $first_name]);
        }
        if($last_name && $last_name !='' && $last_name !=null && $last_name !='undefined'){
            Customer::where('id', $request->id)->update(['last_name'=> $last_name]);
        }
        if($email && $email !='' && $email !=null && $email !='undefined'){
            Customer::where('id', $request->id)->update(['email'=> $email]); 
        }
        if($phone && $phone !='' && $phone !=null && $phone !='undefined'){
            Customer::where('id', $request->id)->update(['phone'=> $phone]);
        }
        if($address && $address !='' && $address !=null && $address !='undefined'){
            Customer::where('id', $request->id)->update(['address'=> $address]);
        }
        if($password && $password !='' && $password !=null && $password !='undefined'){
            $password = Hash::make($password);
            Customer::where('id', $request->id)->update(['password'=> $password]);
        }

        if($request->file('profile_photo') != "" && $request->file('profile_photo') !=null && $request->file('profile_photo') !='undefined'){
            $newImageName = time().".".$request->file('profile_photo')->extension();
            $request->file('profile_photo')->move(public_path('images/users'),$newImageName);
            Customer::where('id', $request->id)->update(['profile_photo'=> $newImageName]);
        }

    }


}
