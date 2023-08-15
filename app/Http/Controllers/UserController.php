<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = UserTest::all();
        return view('user.list',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        UserTest::create($request->all());
        return view('user.create');
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
    public function edit(UserTest $user)
    {
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,UserTest $user)
    {
        $user->update($request->all());
        return view('user.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserTest $user)
    {
        $user->delete();
        return view('user.create');
    }
}
