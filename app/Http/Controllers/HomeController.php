<?php

namespace App\Http\Controllers;

use App\Models\Coustomer;
use App\Models\Message;
use App\Models\save;
use App\Models\sell;
use App\Models\sellh;
use Illuminate\Http\Request;
use App\Events\notification;
use App\Models\Admin;
use App\Models\User;
use App\Notifications\notifi1;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dd =sellh::sum('price');
       $user = sellh::sum('quamtity');
       $coustomer = Coustomer::count();
       $sell= sellh::all();

        return view('fontend.index')->with('kk',$dd)
        ->with('qty',$user)->with('coustmer',$coustomer)
        ->with('all',$sell);
    }
    public function stock(){
        return view('fontend.stock')->with('stock',sell::all());
    }
    public function sell(){
        return view('fontend.sell')->with('save',save::all());
    }
    public function sell1(Request $req){
        return sell::all();
    }
    public function save(Request $req,sell $sell){
        if($req->quantity1 < 0){
            return back()->with('danger','Out  OF Stock');
        }
        else{
        $save = new save;
        $save->name = $req->name;
        $save->product_id = $req->id;
        $save->price = $req->price;
        $save->quantity = $req->qty;
        $save->discount = $req->discount;
        $save->total = $req->total;
        $save->save();
        $data = Array();
        $data ['quantity'] = $req->quantity1;
        $kk=$req->id;
    //    $dd= $req->quantity1;
    $sell->where('product_name',$kk)->update($data);
    return back();

        }
    }
    public function savedelete($name,$qty, sell $sell){
        $user= sell::where('product_name',$name)->sum('quantity');
        $ss= $user + $qty;
        echo $ss;
        $data = Array();
        $data ['quantity'] = $ss;
        $sell->where('product_name',$name)->update($data);
        save::where('product_id',$name)->delete();
         return back();


    }
    public function sellhistory(save $save1) {


       $data=save::all();
       foreach ($data as $pro) {
        // echo $pro->name;
        $sell = new sellh;
       $sell->name = $pro->name;
       $sell->product_id= $pro->product_id;
       $sell->price = $pro->price;
       $sell->quamtity= $pro->quantity;
       $sell->discount= $pro->discount;
       $sell->total = $pro->total;

       $sell->save();
    //
           }
           save::query()->delete();
          return back()->with('success','Save Successfulley');
}
public function coustomer()
{
    $cos=Coustomer::latest()->get();

    return view('fontend.coustomer')->with('coustomer',$cos);
}
public function csave(Request $req)
{
    $coustomer = new Coustomer;
    $coustomer->name = $req->name;
    $coustomer->email = $req->email;
    $coustomer->phone = $req->phone;
    $coustomer->address = $req->address;
    $coustomer->save();
    return back()->with('success','Save Successfulley');
}
public function coustomeredit($id)
{
        return view('fontend.coustomeredite')->with('coustomer', Coustomer::find($id));

    }
    public function coustomerupdate(Request $req)
    {
      $data=Coustomer::find($req->id);
      $data->name = $req->name;
      $data->email = $req->email;
      $data->phone = $req->phone;
      $data->address = $req->address;
      $data->save();
    return redirect('/coustomer');

    }
    public function coustomerdelete($id)
    {
        Coustomer::find($id)->delete();

        return back();
    }
    public function messege()
    {

        return view('fontend.messege');
    }
    public function messegesave(Request $req)
    {
    //   $message = new Message;
    //   $message->name = $req->name;
    //   $message->email = $req->email;
    //   $message->phone = $req->phone;
    //   $message->message = $req->messege;
    //   $message->save();
      $user = Admin::first();
      $kk=$req;
      $user->notify(new notifi1($kk));
        return back();
        // return $req;
    }
public function notification()
{
    return view('fontend.notification');
}





public function test()
{

   echo Auth::User()->id;

}
}
