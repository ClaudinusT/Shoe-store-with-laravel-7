<?php

namespace App\Http\Controllers;

use App\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class addShoeController extends Controller
{
    public function show()
    {
        return view('addShoe');
    }  

    public function input(Request $request)
    {
        $request->validate([
            'shoeName' => 'required',
            'price' => 'required|numeric|min:100',
            'description' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $shoes = new Shoe();
        
        $shoes->shoeName = $request->shoeName;
        $shoes->price = $request->price;
        $shoes->description = $request->description;

        $path = Storage::putFile('public/images', $request->file('image'));

        $filename = basename($path);

        $shoes->image = $filename;

        $shoes->save();
        
        return redirect('/');
    }
}
