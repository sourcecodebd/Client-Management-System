<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Validator;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateRequest;

class HomeController extends Controller
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


            if($req->session()->get('user_type')=='Admin')
            {
                
                return view('home.admin');
    
            }
            elseif($req->session()->get('user_type')=='Accountant')
            {
    
                return view('home.accountant');
            }
            elseif($req->session()->get('user_type')=='Customer')
            {
    
                return view('home.customer');
            }
            elseif($req->session()->get('user_type')=='Sales')
            {
    
                return view('home.sales');
            }
            elseif($req->session()->get('user_type')=='Vendor')
            {
    
                return view('home.vendor');
            }

    }

    public function Cshow($id){

        $user = Customer::find($id);
        //print_r($user);
        return view('home.details')->with('user', $user);
    }

    public function Ccreate(){
        return view('home.create');
    }

    public function Cstore(UserRequest $req){

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
            $req->session()->flash('msg', 'Customer is created successfully...');
            return redirect()->route('home.Clist');
        }
    }

    public function Cedit($id){
        
        $user = Customer::find($id);
        return view('home.edit')->with('user', $user);
    }


    public function Cupdate($id, UpdateRequest $req){

        $user = Customer::find($id);
        
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
            $user->save();

        $req->session()->flash('msg', 'Customer is updated successfully...');
        return redirect()->route('home.Clist');
    }

    public function Clist(){
        
        $userlist = Customer::all();
        //$userlist = $this->getUserlist();
        return view('home.list')->with('list', $userlist);
    }

    /*public function getUserlist (){

        return [
                ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
            ];
    }*/

    public function Cdelete($id){

        $user = Customer::find($id);
        return view('home.delete')->with('user', $user);
    }

    public function Cdestroy($id, Request $req){

        if(Customer::destroy($id)){
            $req->session()->flash('msg', 'Customer is deleted successfully...');
            return redirect()->route('home.Clist');
        }else{
            return redirect('/home/delete/customer/'.$id);
        }

    }
}
