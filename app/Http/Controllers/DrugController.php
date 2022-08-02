<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\User;
use App\Models\Pharmacy;
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
        $pharmacy = Pharmacy::where('user_id',$id)->first();
        $pharmacy_id = $pharmacy->id;
        return view('drug.index',['drugs'=>Drug::all()->where('pharmacy_id',$pharmacy_id)]);
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
            'manfacture_date'=>'required|date|before:yesterday',
            'expire_date'=>'required|date|after:tomorrow',
            'strength'=>'required|string',
            'form'=>'required|string',
            'price'=>'required|numeric ',
            'quantity'=>'required|integer',
            'drug_manufacturer'=>'required|string|',
            'description'=>'required|string',
            'image'=>'required|image',
        ]);
        $id = Auth::user()->id;
        $pharmacy = Pharmacy::where('user_id',$id)->first();
        $pharmacy_id = $pharmacy->id;
        Drug::create([
            'pharmacy_id' => $pharmacy_id,
            'drug_name' => $request->drug_name,
            'drug_price' => $request->price,
            'drug_quantity' => $request->quantity,
            'drug_image' => $request->file('image')->store('drug_images','public'),
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
        return view('drug.show',['drug'=>Drug::find($id)]);
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
        return view('drug.edit',['drug'=>Drug::find($id)]);
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
        $request->validate([
            'drug_name'=>'required|string',
            'manfacture_date'=>'required|date|before:yesterday',
            'expire_date'=>'required|date|after:tomorrow',
            'dosage'=>'required|string',
            'form'=>'required|string',
            'price'=>'required|numeric ',
            'quantity'=>'required|integer',
            'drug_manufacturer'=>'required|string',
            'description'=>'required|string',
            'image'=>'image',
        ]);
        $drug = Drug::find($id);
        if($request->hasFile('image')){        
        $drug->update([
            'drug_name' => $request->drug_name,
            'drug_price' => $request->price,
            'drug_quantity' => $request->quantity,
            'drug_image' => $request->file('image')->store('drug_images','public'),
            'drug_form' => $request->form,
            'drug_dosage' => $request->dosage,
            'drug_manufacturer' => $request->drug_manufacturer,
            'drug_expiry_date' => $request->expire_date,
            'drug_manufacture_date' => $request->manfacture_date,
            'drug_description' => $request->description,
        ]);
        }else{
            $drug->update([
                'drug_name' => $request->drug_name,
                'drug_price' => $request->price,
                'drug_quantity' => $request->quantity,
                'drug_form' => $request->form,
                'drug_dosage' => $request->dosage,
                'drug_manufacturer' => $request->drug_manufacturer,
                'drug_expiry_date' => $request->expire_date,
                'drug_manufacture_date' => $request->manfacture_date,
                'drug_description' => $request->description,
            ]);
        }
        return redirect()->route('show-drug',$id)->with('success', 'Drug Updated successfully');
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
        // $drug = Drug::find($id);
        // $drug->delete();
        // return redirect()->route('user-home')->with('success', 'Drug Deleted successfully');
    }
}
