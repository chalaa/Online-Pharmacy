<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request,)
    {
        //validating request
        $user_id=Auth::user()->id;
        $request->validate([
            'pharmacy_name' => 'required|string|max:255',
            'pharmacy_address' => 'required|string|max:255',
            'phone_number' => 'required|string',
        ]);
        
        //creating pharmacy
        Pharmacy::create([
            'pharmacy_name' => $request->pharmacy_name,
            'pharmacy_address' => $request->pharmacy_address,
            'pharmacy_phone_number' => $request->phone_number,
            'user_id' => $user_id,
        ]);

        return redirect()->route('user-home')->with('success', 'Pharmacy created successfully');
        
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
    public function edit($id)
    {
        //
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
        //
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

    public function registerdPharmacy()
    {
        //
        return view('admin.registered-pharmacy',[
            'pharmacies' => User::all()->where('is_pharmacy', 1)->where('is_approved', 0),
        ]);
    }
    public function approvedPharmacy()
    {
        //
        return view('admin.approved-pharmacy', [
            'pharmacies' => User::all()->where('is_pharmacy', 1)->where('is_approved', 1),
        ]);
    }

    public function pharmacyDetail($id)
    {
        //
        return view('admin.pharmacy-detail',[
            'pharmacy' => User::find($id)
        ]);
    }

    public function approvePharmacy ($id)
    {
        //
        $pharmacy = User::find($id);
        $pharmacy->is_approved = 1;
        $pharmacy->save();
        return redirect()->route('registered-pharmacy')->with('success', 'Pharmacy approved successfully');
    }

    public function deletePharmacy($id)
    {
        //
        $pharmacy = User::find($id);
        $pharmacy->delete();
        return redirect()->route('approved-pharmacy')->with('success', 'Pharmacy deleted successfully');
    }

    public function deletedPharmacy(){
    
        //
        return view('admin.deleted-pharmacy',
        ['pharmacies'=>User::onlyTrashed()->where('is_pharmacy',1)->get()]);
    }
}
