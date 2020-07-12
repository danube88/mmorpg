<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::id());

        if ($user->hasRole('admin'))
        { // you can pass an id or slug
            if(view()->exists('admin.index'))
            {
                return view('admin.index');
            }

            abort(404);
        }

        if ($user->hasRole('user'))
        { // you can pass an id or slug
            if(view()->exists('user.index'))
            {
                return view('user.index');
            }

            abort(404);
        }

        return view('home');
    }
}
