<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::all();
        $title = 'Servicios';
        return view('pages.servicepage', compact('services', 'title'));
    }
    
    public function create()
    {
        return view('forms.serviceCreateForm');
    }

    public function store(ServiceRequest $request)
    {
        $service = new Service;

        $service->name = $request->name;
        $service->description = $request->description;
        $service->amount = $request->amount;
        $service->renewal = $request->renewal;
        $service->created = $request->created;

        $service->save();

        return redirect()->route('services.index');
    }

    public function show($id)
    {
        $service = Service::where('id', $id)->first();
        return view('forms.serviceUpdateForm', compact('service'));
    }

    public function update($id, ServiceRequest $request)
    {
        
       Service::where('id', $id)
          ->update([
            'name' => $request->name,
            'description' => $request->description,
            'amount' => $request->amount,
            'renewal' => $request->renewal,
            'created' => $request->created,
        ]);

        return redirect()->route('services.index');
    }

     public function destroy($id)
    {
        $deletedRows = Service::where('id', $id)->delete();
        return redirect()->route('services.index');
    }
}