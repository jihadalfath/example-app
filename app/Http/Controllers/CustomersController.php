<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = customers::latest()->paginate(5);

      

        return view('customers.index',compact('customer'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        $request->validate([

            'nama' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',

        ]);

      

        customers::create($request->all());

       

        return redirect()->route('customers.index')

                        ->with('success','customer created successfully.');

    }

  

    /**

     * Display the specified resource.

     *

     * @param  \App\Models\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function show(customers $customer)

    {

        return view('customers.show',compact('customer'));

    }

  

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Models\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function edit(customers $customer)

    {

        return view('customers.edit',compact('customer'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Models\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, customers $customer)

    {

        $request->validate([

            'nama' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'phone' => 'required',

        ]);

      

        $customer->update($request->all());

      

        return redirect()->route('customers.index')

                        ->with('success','customer updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Models\Product  $product

     * @return \Illuminate\Http\Response

     */

    public function destroy(customers $customer)

    {

        $customer->delete();

       

        return redirect()->route('customers.index')

                        ->with('success','Product deleted successfully');

    }

} 