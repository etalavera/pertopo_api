<?php

namespace App\Http\Controllers;

use App\Cat_Roles;
use Illuminate\Http\Request;

class CatRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Cat_Roles::all()->toArray();
        return response()->json($roles);
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
     * @param  \App\Cat_Roles  $cat_Roles
     * @return \Illuminate\Http\Response
     */
    public function show($id_rol)
    {
        //
        $roles = Cat_Roles::where('id', $id_rol)->get();
        return response()->json($roles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cat_Roles  $cat_Roles
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat_Roles $cat_Roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cat_Roles  $cat_Roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat_Roles $cat_Roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cat_Roles  $cat_Roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat_Roles $cat_Roles)
    {
        //
    }
}
