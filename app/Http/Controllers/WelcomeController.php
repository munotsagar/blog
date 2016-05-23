<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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
        $first = "Sagar";
        $last = "Munot";
        return view('pages/about')->with([
            'first' => $first,
            'last' => $last
        ]);
    }
}
