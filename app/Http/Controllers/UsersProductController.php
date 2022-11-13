<?php

namespace App\Http\Controllers;

use App\Models\UsersProduct;
use Illuminate\Http\Request;

class UsersProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersProduct  $usersProduct
     * @return \Illuminate\Http\Response
     */
    public function show(UsersProduct $usersProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsersProduct  $usersProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersProduct $usersProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersProduct  $usersProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersProduct $usersProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersProduct  $usersProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersProduct $usersProduct)
    {
        //
    }
}
