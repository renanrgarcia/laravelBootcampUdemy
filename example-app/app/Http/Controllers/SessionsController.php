<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index()
    {
        return session()->all();
    }

    public function set() 
    {
        // $query = request()->query();

        // session($query);
        // $request->session()->put($query);

        session()->put(['cars' => ['bmw', 'mercedes', 'audi']]);
        session()->push('cars', 'volvo');

        return 'sessions are set';
    }

    public function delete ()
    {
        session()->forget('audi');
    } 
}
