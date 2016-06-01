<?php

namespace App\Http\Controllers;

/*use Illuminate\Http\Request;

use App\Http\Requests;*/

use App\Todo;

use App\User;
use Auth;

use Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //dd("index here : ". Auth::user()->id);

        $todos = User::where('id','=',Auth::user()->id)->get();
        return $todos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        dd("store here");
        $todo = new Todo(Request::all());
        $todo->user_id = Auth::user()->id;
        $todo->save();
        return $todo;
    }
}
