<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserManagmentController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Super Admin only
        $this->authorize('update', User::class);

        //gets all unauthorized users
        $users = User::where('authorized', 0)->get();

        return view('adminPages.authorise', ['users' => $users ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //SuperAdmin only
        $this->authorize('update', User::class);

        //Authorizes users
        $updateUser = User::where('id', $id)->first();
        $updateUser->authorized = 1;
        $updateUser->save();

        return $updateUser->name;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
