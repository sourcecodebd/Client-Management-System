<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use App\Customer;
use App\Accountant;
use App\Sale;
use App\Vendor;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(){

        return view('login.index');
    }

    public function verify(LoginRequest $req){

        /* $user = User::where('password', $req->password)
                    ->where('username', $req->username)
                    ->get(); */
        //echo count($user);

        /* $user = DB::table('customers')
                    ->where('password', $req->password)
                    ->where('email', $req->email)
                    ->get(); */

            if($req->email == "" || $req->password == ""){
            $req->session()->flash('msg', 'Null email or password...');
            return redirect('/login');
            }
            
            elseif($user = Admin::where('email',$req->email)
            ->where('password',$req->password)
            ->first())
            {
                $req->session()->put('email', $req->email);
                $req->session()->put('username',$user->username);
                $req->session()->put('user_type','Admin');
                return redirect('/home');
    
            }
            elseif($user = Accountant::where('email',$req->email)
            ->where('password',$req->password)
            ->first())
            {
    
                $req->session()->put('email', $req->email);
                $req->session()->put('username',$user->username);
                $req->session()->put('user_type','Accountant');
                return redirect('/home');
            }
            elseif($user = Customer::where('email',$req->email)
            ->where('password',$req->password)
            ->first())
            {
    
                $req->session()->put('email', $req->email);
                $req->session()->put('username',$user->username);
                $req->session()->put('user_type','Customer');
                return redirect('/home');
            }
            elseif($user = Sale::where('email',$req->email)
            ->where('password',$req->password)
            ->first())
            {
    
                $req->session()->put('email', $req->email);
                $req->session()->put('username',$user->username);
                $req->session()->put('user_type','Sales');
                return redirect('/home');
            }
            elseif($user = Vendor::where('email',$req->email)
            ->where('password',$req->password)
            ->first())
            {
    
                $req->session()->put('email', $req->email);
                $req->session()->put('username',$user->username);
                $req->session()->put('user_type','Vendor');
                return redirect('/home');
            }
            
            else{

                $req->session()->flash('msg', 'Invalid email or password...');
                return redirect('/login');
            }
        }
}
