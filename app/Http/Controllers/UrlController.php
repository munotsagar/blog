<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Url;

use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Access\Response;

use App\Http\Controllers\Auth\AuthController;

class UrlController extends Controller
{
    public function index()
    {
        //$authcontroller = new AuthController();
        Auth::basic("username");
        //$authcontroller->username = "username";

        //return 'Hello, API';

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //$this->index();
        $url = new Url();
        $url->url = $request->get('url');
        //dd(Auth::user());
        $url->description = $request->get('description');
        $url->user_id = Auth::user()->id;

        // Validation and Filtering is sorely needed!!
        // Seriously, I'm a bad person for leaving that out.

        $url->save();

        return response()->json(array(
         'response' => array(
            'error' => false,
            'urls' => $url->toArray()),
            'status' => 200
        )
        );
    }

    public function createForm(){
        return view('url.addUrlData');
    }
}
