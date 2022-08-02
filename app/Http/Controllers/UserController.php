<?php

namespace App\Http\Controllers;

use Rules\Password;
use App\Models\Drug;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pharmacy_id = Auth::user()->pharmacy->id;
        $now = date('Y-m-d');  
        return view('home',[
            'user'=>User::all(),
            'deletedUser'=>User::onlyTrashed()->get(),
            'drugs'=>Drug::all()->where('pharmacy_id',$pharmacy_id),
            'active_drugs'=> Drug::where('pharmacy_id',$pharmacy_id)->where('drug_expiry_date','>',$now)->get(),
            'expired_drugs' => Drug::where('pharmacy_id',$pharmacy_id)->where('drug_expiry_date','<',$now)->get()
        ]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => [ 'string', 'email', 'max:255',],
            'password' => ['confirmed',],
        ]);
        $user =  User::find($id);
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user-home')->with('success', 'User Account updated successfully');;
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
