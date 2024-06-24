<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "CREATE";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "STORE METHOD";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Category #" . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Category #" . $id . " is being edited";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Category #" . $id . " is being updated with PUT or PATCH";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
