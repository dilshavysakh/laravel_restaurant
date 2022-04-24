<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Menuarea;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user()
    {
        if(Auth::id()){
            if (Auth::user()->usertype == 1) {
                $data=User::all();
                return view('admin.users',compact("data"));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function deleteuser($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }
//foodmenu
    public function upload(Request $request)
    {
        $data=new Food();

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        

        return redirect()->back();
    }
    public function foodmenu()
    {
        if(Auth::id()){
            if (Auth::user()->usertype == 1) {
                $data=Food::all();
                return view('admin.foodmenu',compact("data"));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function deletemenu($id)
    {
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatemenu($id)
    {
        $data=Food::find($id);
        return view('admin.updatemenu',compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data=Food::find($id);

        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('foodimage',$imagename);
            $data->image=$imagename;
        }

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        

        return redirect()->back();
    }

//resrvation
    public function reservation(Request $request)
    {
        $data=new Reservation();

        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->save();
        

        return redirect()->back();

    }

    public function viewreservation()
    {
        
        if(Auth::id()){
            if (Auth::user()->usertype == 1) {
                $data=Reservation::all();
                return view('admin.viewreservation',compact("data"));
            }else{
                return redirect()->back();
            }
            
        }
        else{
            return redirect('login');
        }
        
    }

    //chef

    public function viewchef()
    {
        if(Auth::id()){
            if (Auth::user()->usertype == 1) {
            $data=Foodchef::all();
            return view('admin.adminchef',compact("data"));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }
    public function uploadchef(Request $request)
    {
        $data=new Foodchef();

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);

        $data->image=$imagename;

        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        

        return redirect()->back();
    }
    
    public function updatechef($id)
    {
        $data=Foodchef::find($id);
        return view('admin.updatechef',compact("data"));
    }
    public function update2(Request $request, $id)
    {   
        $data=Foodchef::find($id);
        $image=$request->image;

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefimage',$imagename);
            $data->image=$imagename;
        }
        
        $data->name=$request->name;
        $data->speciality=$request->speciality;
        $data->save();
        

        return redirect()->back();
    }

    public function deletechef($id)
    {
        $data=Foodchef::find($id);
        $data->delete();
        return redirect()->back();
    }
//foodmenu
    public function menuarea()
    {
        if(Auth::id()){
            if (Auth::user()->usertype == 1) {
            $data=Menuarea::all();
            return view('admin.adminmenuarea',compact("data"));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }
    public function uploadmenufood(Request $request)
    {
        $data=new Menuarea();

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('menufoodimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        

        return redirect()->back();
    }
    public function deletemenuarea($id)
    {
        $data=MenuArea::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updatemenuarea(Request $request, $id)
    {
        $data=Menuarea::find($id);
        return view('admin.updatemenuarea',compact("data"));
    }
    public function update3(Request $request, $id)
    {   
        $data=Menuarea::find($id);
        $image=$request->image;

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('menufoodimage',$imagename);
            $data->image=$imagename;
        }
        
        $data->title=$request->title;
        $data->description=$request->description;
        $data->save();
        

        return redirect()->back();
    }

    public function orders()
    {
        if(Auth::id()){
            if (Auth::user()->usertype == 1) {
                $data=Order::all();
                return view('admin.adminorder',compact("data"));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function search(request $request)
    {
        if(Auth::id()){
            if (Auth::user()->usertype == 1) {
                $search=$request->search;
                $data=Order::where('name','like','%'.$search.'%')->
                orWhere('foodname','like','%'.$search.'%')->
                get();
                return view('admin.adminorder',compact("data"));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

}
