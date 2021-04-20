<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Address;
use App\Http\Requests\AddressRequest;

class AddressController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $addresses = Address::all();
        $title = 'Direccion';
        return view('pages.addressPage', compact('addresses', 'title'));
    }
    
    public function create()
    {
        return view('forms.addressCreateForm');
    }

    public function store(AddressRequest $request)
    {
        $address = new Address;

        $address->country = $request->country;
        $address->state = $request->state;
        $address->city = $request->city;
        $address->address_1 = $request->address_1;
        $address->address_2 = $request->address_2;
        $address->postal_code = $request->postal_code;

        $address->save();

        return redirect()->route('addresses.index');
    }

    public function show($id)
    {
        $address = Address::where('id', $id)->first();
        return view('forms.addressUpdateForm', compact('address'));
    }

    public function update($id, AddressRequest $request)
    {   
       Address::where('id', $id)
          ->update([
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'postal_code' => $request->postal_code,
        ]);

        return redirect()->route('addresses.index');
    }

     public function destroy($id)
    {
        $deletedRows = Address::where('id', $id)->delete();
        return redirect()->route('addresses.index');
    }
}