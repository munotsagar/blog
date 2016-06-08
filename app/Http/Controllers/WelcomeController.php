<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function contact()
    {
        $first = "Sagar";
        $last = "Munot";
        $names = ['abc', 'def', 'ghi', 'jkl'];
        return view('pages.contact', compact('first', 'last', 'names'));
    }

    public function about()
    {
        $first = Auth::user()->first_name;
        $last = Auth::user()->last_name;
        //dd(Auth::user());
        return view('pages/about')->with([
            'first' => $first,
            'last' => $last
        ]);
    }
}
