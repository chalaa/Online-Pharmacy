<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id= Auth::user()->id;
        return view('drug.index',['drugs'=>Drug::all()->where('pharmacy_id',$id)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        //
        if(!(Auth::user()->is_pharmacy == 1)){
            abort(403, 'Unauthorized action.');
        }
        return view('drug.create', compact('user'));
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
        $request->validate([
            'drug_name'=>'required|string',
            'manfacture_date'=>'required|date',
            'expire_date'=>'required|date',
            'strength'=>'required|string',
            'form'=>'required|string',
            'price'=>'required|numeric ',
            'quantity'=>'required|integer',
            'drug_manufacturer'=>'required|string',
            'description'=>'required|string',
            'image'=>'required|image',
        ]);
        $id = Auth::user()->id;
        Drug::create([
            'pharmacy_id' => $id,
            'drug_name' => $request->drug_name,
            'drug_price' => $request->price,
            'drug_quantity' => $request->quantity,
            'drug_image' => $request->file('image')->store('public/drug_images'),
            'drug_form' => $request->form,
            'drug_dosage' => $request->strength,
            'drug_manufacturer' => $request->drug_manufacturer,
            'drug_expiry_date' => $request->expire_date,
            'drug_manufacture_date' => $request->manfacture_date,
            'drug_description' => $request->description,
        ]);
        return redirect()->route('user-home')->with('success', 'Drug Added successfully');
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
}
