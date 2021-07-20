<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Vendor;
use Validator;
use App\Http\Requests\ProductRequest;
use Carbon\Carbon;

class ProductController extends Controller
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

        return view('system.product', compact('id', 'name'));

    }

//Existing Details


    public function Pcreate(){
        return view('system.addProduct');
    }

    public function Pstore(ProductRequest $req){

        $add = new Product();
        
            $add->product_name = $req->product_name;
            $add->category     = $req->category;
            $add->unit_price   = $req->unit_price;
            $add->status       = $req->status;
            $add->save();

        $req->session()->flash('msg', 'Product added successfully...check it out!');
        return redirect()->route('product.Pcreate');
    }


    public function Eshow($id, $product_name){

        $existing = Product::find($id)
        ->where('product_name', $product_name)
        ->first();  /* here get() or nothing given both won't work, because we it can't recognize from which id product_name is being fetched*/
        //print_r($user);
        return view('system.existingDetails')->with('existing', $existing);
    }

    public function Eedit($id){
        
        $existing = Product::find($id);
        return view('system.existingEdit')->with('existing', $existing);
    }


    public function Eupdate($id, ProductRequest $req){

        $existing = Product::find($id);
        
            $existing->product_name = $req->product_name;
            $existing->category     = $req->category;
            $existing->unit_price   = $req->unit_price;
            $existing->status       = $req->status;
            $existing->save();

        $req->session()->flash('msg', 'Existing product edited successfully...check it out!');
        return redirect()->route('product.Elist');
    }

    public function Elist(){
        
        $existinglist = Product::where('status','existing')
        ->get(); /* here first() won't work, because we it can't recognize from all members of existing status have been called */

        return view('system.existingList')->with('list',$existinglist);
    }

    public function Edelete($id){

        $existing = Product::find($id);
        return view('system.existingDelete')->with('existing', $existing);
    }

    public function Edestroy($id, Request $req){

        if(Product::destroy($id)){

            $req->session()->flash('msg', 'Existing product deleted successfully...check it out!');
            return redirect()->route('product.Elist');
        }else{
            return redirect('/system/product_management/delete/existing_products/'.$id);
        }

    }


//Upcoming Details

public function Ushow($id, $product_name){

    $upcoming = Product::find($id)
    ->where('product_name', $product_name)
    ->first();
    //print_r($user);
    return view('system.upcomingDetails')->with('upcoming', $upcoming);
}


public function Uedit($id){
    
    $upcoming = Product::find($id);
    return view('system.upcomingEdit')->with('upcoming', $upcoming);
}


public function Uupdate($id, ProductRequest $req){

    $upcoming = Product::find($id);
    
        $upcoming->product_name = $req->product_name;
        $upcoming->category     = $req->category;
        $upcoming->unit_price   = $req->unit_price;
        $upcoming->status       = $req->status;
        $upcoming->save();

    $req->session()->flash('msg', 'Upcoming product edited successfully...check it out!');
    return redirect()->route('product.Ulist');
}

public function Ulist(){
    
    $upcominglist = Product::where('status','upcoming')
    ->get();
    return view('system.upcomingList')->with('list', $upcominglist);
}


public function Udelete($id){

    $upcoming = Product::find($id);
    return view('system.upcomingDelete')->with('upcoming', $upcoming);
}

public function Udestroy($id, Request $req){

    if(Product::destroy($id)){

        $req->session()->flash('msg', 'Upcoming product deleted successfully...check it out!');
        return redirect()->route('product.Ulist');
    }else{
        return redirect('/system/product_management/delete/upcoming_products/'.$id);
    }

}


}
