<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display dashboard.
     *
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * @return mixed
     */
    public function changeLanguage(Request $request)
    {
         $lang = $request->get('language');

        \Session::put('locale', $lang);

        return \Redirect::back();
    }
}
