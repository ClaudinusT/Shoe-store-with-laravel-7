<?php

namespace App\Http\Controllers;

use App\Shoe;
use App\transheader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class dashController extends Controller
{
    public function dash()
    {
        $shoes = Shoe::paginate(6);
        return view('dashboard', compact('shoes'));
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $items = Shoe::where('shoeName', 'LIKE', '%'.$search.'%')->paginate(6);

        return view('search', compact('items'));
    }
}
