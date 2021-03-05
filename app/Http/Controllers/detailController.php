<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class detailController extends Controller
{
    public function detail($id)
    {
        $shoes = \App\Shoe::find($id);
        $auth = Auth::check();
        $role = 'guest';

        if($auth)
        {
            $role = Auth::user()->role;
        }

        return view('detail', compact('shoes'), compact('role'));
    } 
}
