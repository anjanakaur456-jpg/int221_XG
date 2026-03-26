<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function store()
    {
        // save data

        return redirect('/about');
    }
    
    function update()
    {
        // save data

        return redirect('/home');
    }
}
