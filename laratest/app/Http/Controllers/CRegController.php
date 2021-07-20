<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;
use App\Http\Requests\UserRequest;

class CRegController extends Controller
{
    public function index( Request $req){

        $name = "Nafi";
        $id = "123";

        //return view('home.index', ['name'=> 'xyz', 'id'=>12]);
        // return view('home.index')
        //         ->with('name', 'Nafi')
        //         ->with('id', '12');

        // return view('home.index')
        //         ->withName($name)
        //         ->withId($id);

        return view('registration.index', compact('id', 'name'));

    }


    public function Creg(UserRequest $req){

/*
        $this->validate($req, [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        /*$req->validate([
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ])->validate();*/

        //$validation->validate();

        /*$validation = Validator::make($req->all(), [
            'username' => 'required|max:5',
            'password' => 'required|min:6'
        ]);

        if($validation->fails()){
         //   return redirect()->route('home.create')->with('errors', $validation->errors());

            return Back()->with('errors', $validation->errors())->withInput();            
        }*/

        if($req->hasFile('myfile')){
            $file = $req->file('myfile');  
            /*echo $file->getClientOriginalName()."<br>";  
            echo $file->getClientOriginalExtension()."<br>";  
            echo $file->getSize()."<br>";*/
            //$file->move('upload', $file->getClientOriginalName());

            $filename = time().".".$file->getClientOriginalExtension();

            $file->move('upload', $filename);

            $user = new Customer();
            $user->full_name     = $req->full_name;
            $user->username     = $req->username;
            $user->email         = $req->email;
            $user->password      = $req->password;
            $user->country       = $req->country;
            $user->phone         = $req->phone;
            $user->city          = $req->city;
            $user->company_name = $req->company_name;
            $user->user_type = $req->user_type;
            $user->date_added = $req->date_added;
            $user->profile_img = $filename;
            $user->save();

            $req->session()->flash('msg', 'Registration is successful...login now!');
            return redirect()->route('login.index');

        }
    }
}
