<?php

namespace App\Http\Controllers;

use App\Shoe;
use App\transdetail;
use App\transheader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class viewTransController extends Controller
{
    public function checkout(Request $request)
    {
        $headers = transheader::find($request->id);
        
        $headers->status = $request->status;
        $headers->save();
        
        return redirect('/');
    }
    
    public function showTrans()
    {
        $user = Auth::user();
        $headers = transheader::where('userId', $user->id)->where('status', 'completed')->get();
        
        foreach($headers as $header)
        {
            $total = 0;
            foreach($header->details as $detail)
            {
                foreach($detail->shoe as $shoes)
                {
                    $total += ($detail->qty * $shoes->price);
                }
            }
            $header['total'] = $total;
        }

        return view('/viewTrans', compact('headers'));
    }
}
