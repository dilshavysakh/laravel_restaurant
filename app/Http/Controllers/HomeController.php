<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Foodchef;
use App\Models\MenuArea;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            return redirect('redirects');
        }
        else{
            $data=food::all();
        
            $data2=foodchef::all();
    
            $data3=MenuArea::all();
            // $count="";
            return view('home',compact("data","data2","data3"));
        }
        
    }
    public function redirects()
    {
        $data=food::all();
        $data2=foodchef::all();
        $data3=MenuArea::all();

        $usertype=Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin.adminhome',compact("data","data2","data3"));
        }
        else{
            //cart related
            $user_id=Auth::id();
            $count=Cart::where('user_id',$user_id)->count();

            return view('home',compact("data","data2","data3","count"));
        }
        
    }
    //cart
    public function addcart(request $request,$id)
    {
        // if user login
        if(Auth::id()){
            $user_id=Auth::id();
            // dd($user_id);
            $foodid=$id;
            $quantity=$request->quantity;
            $cart=new Cart();
            $cart->user_id=$user_id;
            $cart->food_id=$foodid;
            $cart->quantity=$quantity;
            $cart->save();

            return redirect()->back();
        }
        else{
            return view('auth.login');
        }
    }

    public function showcart(request $request,$id)
    {
        $count=Cart::where('user_id',$id)->count();

        if(Auth::id()==$id){
            // to remove
            $data2=Cart::select('*')->where('user_id','=',$id)->get();
            // 
            $data=Cart::where('user_id',$id)->join('menu_areas','carts.food_id','=','menu_areas.id')->get();
            return view('showcart',compact('count','data','data2'));
        }
        else{
            return redirect()->back();
        }
        
    }

    
    
    public function removecart(request $request,$id)
    {
        $data=cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orderconfirm(request $request)
    {
        foreach($request->foodname as $key =>$foodname)
        {
            $data=new Order();

            //array of items to table
            $data->foodname=$foodname;
            $data->price=$request->price[$key];
            $data->quantity=$request->quantity[$key];
            //
            $data->name=$request->name;
            $data->address=$request->address;
            $data->phone=$request->phone;
            $data->city=$request->city;
            $data->pincode=$request->pincode;
            $data->save();

        }
        return redirect()->back();
    }
}
