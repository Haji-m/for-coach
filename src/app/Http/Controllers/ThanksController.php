<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function exclusive(Request $request)
    {
        if ($request->input('search-text') === 'みつき') {
            return view('exclusive');
        };

        return view('other');
    }
}
