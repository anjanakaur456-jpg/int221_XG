<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PRODUCT extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return "welcome to product resource controller";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "product is created successfully";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "data stored successfully with data: ";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "data successfully displayed of id: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "edit data successfully for id: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "update data successfully for id: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "data successfully deleted for id: " . $id;
    }
}
