<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Towfactorecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.verify');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$user = auth()->user();
if($request->input('code') == $user->code){
    $user->resetcode();
return redirect()->route('dashboard');
}
 return redirect()->back()->withErrors(['code'=> 'code invalid']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
