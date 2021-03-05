<?php

namespace App\Http\Controllers;

use App\Shoe;
use App\transdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class updateDeleteController extends Controller
{
    public function update($id)
    {
        $shoes = Shoe::find($id);
        return view('update', compact('shoes'));
    }

    public function reNew(Request $request, $id)
    {
        $shoes = Shoe::find($id);

        $request->validate([
            'shoeName' => 'required',
            'price' => 'required|numeric|min:100',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,png'
        ]);
        
        $shoes->shoeName = $request->shoeName;
        $shoes->price = $request->price;
        $shoes->description = $request->description;

        $path = Storage::putFile('public/images', $request->file('image'));

        $filename = basename($path);

        $shoes->image = $filename;

        $shoes->save();
        
        return redirect('/')->with('shoes', $shoes);
    } 

    public function updateShoeCart(Request $request)
    {
        $details = transdetail::find($request->id);

        $request->validate([
            'qty' => 'required|numeric'
        ]);
        
        $details->qty = $request->qty;
        $details->save();

        return redirect('/viewCart');
    }

    public function deleteCart(Request $request)
    {
        $details = transdetail::find($request->id);

        $details->delete();

        return redirect('/viewCart');
    }
}
