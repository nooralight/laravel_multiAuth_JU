<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    protected function createPayment(Request $request){
        Payment::create($request->all());
        return redirect()->back();
    }

}
