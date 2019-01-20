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

        //gets all users
        $users = User::all();

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
    public function update(Request $request)
    {
        //SuperAdmin only
        $this->authorize('update', User::class);

        $request = $request->all();
        $split = explode(':', $request['id']);
        $action = $split[0];
        $id = $split[1];

        $updateUser = User::where('id', $id)->first();
        switch ($action) {
            case 'makeAuth':
                $updateUser->authorized = 1;
                break;
            case 'revokeAuth':
                $updateUser->authorized = 0;
                break;
            case 'makeSuper':
                $updateUser->super_admin = 1;
                break;
            case 'revokeSuper':
                $updateUser->super_admin = 0;
                break;
        }

        //Authorizes users
        $updateUser->save();
        return redirect('authorize')->with('status', 'User\'s privileges updated!');
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
