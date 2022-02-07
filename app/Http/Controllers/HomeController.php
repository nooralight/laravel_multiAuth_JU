<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('user');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $id = Auth::id();
        if ($request->has('district')){
            $users= User::orderBy('iit_batch','desc')
            ->where('district', $request->district)
            ->where('status', '=', 1)
            ->where('is_admin', '=', 0)
            ->where('id', '!=', $id)
            ->get();
        }
        elseif ($request->has('ju_batch')){
            $users= User::orderBy('iit_batch','desc')
            ->where('ju_batch', $request->ju_batch)
            ->where('status', '=', 1)
            ->where('is_admin', '=', 0)
            ->where('id', '!=', $id)
            ->get();
        }
        elseif ($request->has('organization')){
            $users= User::orderBy('iit_batch','desc')
            ->where('organization', $request->organization)
            ->where('status', '=', 1)
            ->where('is_admin', '=', 0)
            ->where('id', '!=', $id)
            ->get();
        }
        elseif(count($request->all()) < 2){
            $users= User::orderBy('iit_batch','desc')
            ->where('status', '=', 1)
            ->where('is_admin', '=', 0)
            ->where('id', '!=', $id)
            ->get();
        }

        // $users = User::where('status', '=', 1)
        //      ->where('is_admin', '=', 0)
        //      ->where('id', '!=', $id)
        //      ->get();
        //dd($request);

        $status= Auth::user()->status;

        $payment = Payment::where('paymentUserID', '=', $id)->first();

        if ($status == 1){

            return view("home_active")->with(["users"=>$users]);

        } else {
            if ($payment === null) {
                return view('home_notActive')->with(["id"=>$id]);
                }
            else{
                return view('home_notActive_sent_payment')->with(["id"=>$id]);
            }
        }

    }
    public function gotoEdit(){
        $user = Auth::user();
        return view("edit",compact("user"));
    }

    public function updateProfile(Request $request){
        $id= Auth::user()->id;
        $user= User::find($id);


        $user->nameEn = $request->nameEn;
        $user->nameBn = $request->nameBn;

        $user->gender = $request->gender;
        $user->blood = $request->blood;
        $user->dob = $request->dob;
        $user->district = $request->district;
        $user->present_address = $request->present_address;
        $user->mobile = $request->mobile;
        $user->fb_link = $request->fb_link;

        $user->ju_batch = $request->ju_batch;
        $user->iit_batch =$request->iit_batch;
        $user->hall = $request->hall;
        $user->ac_session = $request->ac_session;
        $user->degree_obt = $request->degree_obt;

        $user->occupation = $request->occupation;
        $user->designation = $request->designation;
        $user->organization = $request->organization;
        $user->address_org = $request->adress_org;

        $user->save();


        return redirect()->route("home");
    }
}