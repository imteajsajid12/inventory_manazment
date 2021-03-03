<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Coustomer;
use App\Models\Message;
use App\Models\Month;
use App\Models\sell;
use App\Models\sellh;
use App\Models\User;
use App\Models\Year;
use App\Notifications\notifi;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Admincontrolller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Home()
    {   $dd =sellh::sum('total');
        $user = sellh::sum('quamtity');
        $coustomer = Coustomer::count();
        $sell= sellh::all();
        return view('backend.home',['price'=>$dd,'stock1'=>$user,'coustomer'=>$coustomer,'stock'=>$sell,'quantity'=>sell::sum('quantity'),'user'=>User::count()]);
    }
    public function stock()
    {
        return view('backend.stock',['stock'=>sell::all()]);
    }
    public function stocksave(Request $req)
    {
        $sell = new sell;
        $sell->name=$req->name;
        $sell->product_name=$req->product_id;
        $sell->product_price=$req->Price;
        $sell->quantity=$req->quantity;
        $sell->save();
        $user = User::first();


    //   $kk= $req->Price;
      $user->notify(new notifi());
        return back()->with('success','Save Successfulley');
    }
    public function stockdelete($id)
    {
        sell::find($id)->delete();
        return back();
    }
    public function stockedit($id)
    {
         $show=sell::find($id);
        return view('backend.stockedit',['show'=>sell::find($id)]);
}
public function stockupdate(Request $req)
{
    $sell=sell::find($req->id);
    $sell->name=$req->name;
    $sell->product_name=$req->product_id;
    $sell->product_price=$req->Price;
    $sell->quantity=$req->quantity;
    $sell->save();
    return redirect('/admin/stock')->with('success','Save Successfulley');
}
public function sellhistory()
{
    return view('backend.sellhistory',['sellh'=>sellh::all()]);
}
public function sellhistorydelete($id)
{
    sellh::find($id)->delete();
    return back();
}
public function monthyear()
{
    return view('backend.monthhistory',['month'=>Month::all(),'year'=>Year::all()]);
}
public function sellhistorydeleteall()
{
    $all= sellh::sum('total');
    $qty= sellh::sum('quamtity');
    $month=new Month;
    $month->total_price=$all;
    $month->total_product=$qty;
    $month->save();
    DB::table('sellhs')->delete();
    return back()->with('success','Save Successfulley');

}
public function monthdelete1()
{
    $all= Month::sum('total_price');
    $qty= Month::sum('total_product');
    $month=new Year;
    $month->total_price=$all;
    $month->total_product=$qty;
    $month->save();
    DB::table('months')->delete();
    return back()->with('success','Save Successfulley');

}
public function yeardelete()
{
    DB::table('years')->delete();
    return back();
}
public function coustomer()
{
    return view('backend.coustomer',['coustomer'=>Coustomer::all()]);
}
public function coustomerdelete($id)
{
    Coustomer::find($id)->delete();
    return back()->with('success','Delete Successfulley');
}


public function user()
{
    return view('backend.user',['user'=>User::all()]);
}
public function register(Request $req)
{
   $req->validate( [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],

    ]);
    $user = new User;
    $user->name = $req->name;
    $user->email = $req->email;
    $user-> password =  Hash::make($req->passwore);
    $user->save();
    return back();
}
public function userdelete($id)
{
 User::find($id)->delete();
 return back()->with('success','Delete Successfulley');
}
public function message()
{
return view('backend.messege',['message'=>Message::all()]);
}
public function messagedelete()
{
    $user = Admin::find(Auth::user()->id);
    $user->notifications()->delete();
    return back();
}
public function monthhistory()
{

}
public function yearlyhistory()
{

}


public function test()

  {
    DB::table('messages')->delete();
  }
}

