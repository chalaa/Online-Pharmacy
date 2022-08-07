<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
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
        return view('customer.create');
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
            'firstName' => 'required|string|max:255',
            'middleName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'age' => 'required|integer',
            'sex' => 'required|string',
            'customer_address' => 'required|string',
            'phone_number' => 'required|string|unique:customers'
        ]);
        $user_id = Auth::user()->id;
        Customer::create([
            'user_id' => $user_id,
            'first_name' => $request->firstName,
            'middle_name' => $request->middleName,
            'last_name' => $request->lastName,
            'age' => $request->age,
            'phone_number' => $request->phone_number,
            'customer_address' => $request->customer_address,
            'sex' => $request->sex,
        ]);
       return redirect()->route('user-home')->with('success','Information Added successfully');
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
        return view('customer.edit',[
            'customer'=>Customer::find($id)
        ]);

    }


    public function shop(){
        //
        return view('customer.shop',
        ['drugs'=>Drug::latest()->where('drug_expiry_date','>',date('Y-m-d'))->filter(request(['drug','search','min_price']))->paginate(6)]
    );
    }

    public function singleShop($id){
        //
        return view('customer.single-shop',
        ['drug'=>Drug::find($id)]
    );
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
            'firstName' => 'required|string|max:255',
            'middleName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'age' => 'required|integer',
            'sex' => 'required|string',
            'customer_address' => 'required|string',
            'phone_number' => 'required|string'
        ]);
        $customer = Customer::find($id);
        $customer->update(
            [
                'first_name' => $request->firstName,
                'middle_name' => $request->middleName,
                'last_name' => $request->lastName,
                'age' => $request->age,
                'phone_number' => $request->phone_number,
                'customer_address' => $request->customer_address,
                'sex' => $request->sex,
            ]
        );
        return redirect()->route('user-home')->with('success','Information Updated Successfully');
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
