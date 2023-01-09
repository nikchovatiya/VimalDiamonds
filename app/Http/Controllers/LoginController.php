<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
          'email.required' => 'Enter email',  
          'password.required' => 'Enter password'
        ]);

        $user_details = DB::table('users')->select()->where('email',$request->email)->first();
        $email = $request->email;
        $pwd = $request->password;
        if(is_null($user_details))
        {
            return redirect()->route('login')->with('error','Credentials are wrong.');
        }      
        if(Hash::check($pwd, $user_details->password) & $email==$user_details->email) {
           if ($user_details->verified == true) {
                if ($user_details->active == true){
                    $credentials = $request->only('email', 'password');
                    if (Auth::attempt($credentials)) {
                        Session::put([
                            'firstname'=>$user_details->firstname,
                            'lastname'=>$user_details->lastname                                
                        ]);
                        return redirect()->route('dashboard')->with('data',$user_details);
                    } 
                }else {
                    return redirect()->route('login')->with('error','Your account is not active'); 
                }
            }  
            else{
                return redirect()->route('login')->with('error','Your account in under verification');
            }    
        }
        return redirect()->route('login')->with('error','Credentials are wrong.');
    }
    public function register(Request $request){

       $data= $request->validate([
            'FirstName' => 'required',
            'LastName' => 'required',
            'Email' => 'required|email|unique:users',
            'Mobile' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'State' => 'required',
            'Country' => 'required',
            'Pwd' => 'required|min:6',
            'ConfirmPassword' => 'required|min:6|same:Pwd',
            'checkbox' => 'accepted',
        ],
        [
            'FirstName.required'=>"Enter first name",
            'LastName.required'=>"Enter last name",
            'Email.required'=>"Enter valid email",
            'Email.email'=>"Enter valid email",
            'Email.unique:users'=>"Email already registered",
            'Mobile.required'=>"Enter mobile no.",            
            'Address.required'=>"Enter address",
            'City.required'=>"Enter city",
            'State.required'=>"Enter state",
            'Country.required'=>"Enter country",
            'Pwd.required'=>"Enter password",
            'Pwd.min'=>"Enter Password at lease 6 characters",
            'Pwd.password'=>"Enter valid password",
            'ConfirmPassword.required'=>"Enter confirmed password",
            'ConfirmPassword.same'=>"Password and confirm password are not matched",
            'checkbox.accepted'=>"Accept Terms and Condition",       
        ]
    );
        $data = $request->all();
        /* DD($data); */
        User::create([
            'firstname'=> trim(Str::title($data['FirstName'])),
            'lastname'=> trim(Str::title($data['LastName'])),
            'companyname'=> trim(Str::title($data['CompanyName'])),
            'email'=> $data['Email'],
            'mobile'=> $data['Mobile'],
            'address'=> trim(Str::title($data['Address'])),
            'city'=> trim(Str::title($data['City'])),
            'state'=> trim(Str::title($data['State'])),
            'country'=> trim(Str::title($data['Country'])),
            'password'=> Hash::make( $data['Pwd'])

        ]);

        return redirect()->route('login')->with('success', 'Registration complete. Please wait once we verify your account.');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }  

    public function ShowLoginPage()         
    {       
        if (Auth::check())
        {
            return redirect()->route('dashboard');
        }
        $data = DB::table('setups')->select()->latest()->first();
        return view('Auth\login',['data'=>$data]);
    }

}
