<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request)
    {
        $name= $request->name;
        $email= $request->email;

        return "Name :" .$name." Email: ".$email;
    }
}