<?php

namespace App\Http\Controllers;

use App\Shoe;
use App\transdetail;
use App\transheader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class cartController extends Controller
{
    public function addCart($id)
    {
        $shoes = Shoe::find($id);
        return view('addCart', compact('shoes'));
    }

    public function insertCart(Request $request)
    {
        $request->validate([
            'qty' => 'required|numeric',
        ]);

        $header = transheader::where('userId', Auth::user()->id)->where('status', 'not complete')->first();
        
        if($header == null){
            DB::table('transheader')->insert([
                'userId' => Auth::user()->id
                ]);
            }

        $header = transheader::where('userId', Auth::user()->id)->where('status', 'not complete')->first();
        $detail = transdetail::where('shoeId', $request->id)->where('transId', $header->id)->first();

        if($detail == null)
        {
            DB::table('transdetail')->insert([
                'transId' => $header->id,
                'shoeId' => $request->id,
                'qty' => $request->qty
            ]);
        }
        else{
            $detail = transdetail::where('transId', $header->id)->where('shoeId', $request->id)->first();
            $detail->qty = $request->qty;
            $detail->save();
        }

        return redirect('/');
    }

    public function viewCart()
    {
        $user = Auth::user();
        $headers = transheader::where('userId', $user->id)->where('status', 'not complete')->get();
        
        return view('viewCart', compact('headers'));
    }

    public function editCart($id)
    {
        $details = transdetail::find($id);
        $shoes = Shoe::where('id' , '=', $details->shoeId)->first();

        return view('editCart', compact('details'), compact('shoes'));
        
    }
    
}
