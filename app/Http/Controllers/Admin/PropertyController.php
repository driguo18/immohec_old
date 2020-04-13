<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Client;
use App\Owner;
use App\Property;
use App\Property_type;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::all();

        return view('admin.property.index',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $owners = Owner::all();
        $categories = Category::all();
        $property_types = Property_type::all();
        $clients = Client::all();

        return view('admin.property.create',compact('owners','property_types','categories','clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'owner_id' => 'required|integer',
            'property_type_id' => 'required|integer',
            'category_id' => 'required|integer',
            'name' => 'required',
            'city' => 'required',
            'locality' => 'required',
            'surface' => 'required',
            'pieces_number' => 'required',
            'price' => 'required',
            'caution' => 'required',
            'description' => 'required',
            'client_id' => 'required|integer',
            'status' => 'required|integer'
        ]);
        $slug = str_slug($request->name);
        $property = new Property();
        // Property::create($data);
        //Verify existence
        $property->owner_id = $request->owner_id;
        $property->property_type_id = $request->property_type_id;
        $property->category_id = $request->category_id;
        $property->name = $request->name;
        $property->slug = $slug;
        $property->city = $request->city;
        $property->locality = $request->locality;
        $property->surface = $request->surface;
        $property->pieces_number = $request->pieces_number;
        $property->price = $request->price;
        $property->caution = $request->caution;
        $property->description = $request->description;
        $property->client_id = $request->client_id;
        $property->status = $request->status;
        $property->save();

        Toastr::success('Le bien a bien été ajouté !','Réussite');
        return redirect()->route('admin.property.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property= Property::find($id);
        return view('admin.property.show',compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $property = Property::find($id);
        $owners = Owner::all();
        $categories = Category::all();
        $property_types = Property_type::all();
        $clients = Client::all();
        return view('admin.property.edit',compact('property','owners','property_types','categories','clients'))->withProperty($property);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'owner_id' => 'required|integer',
            'property_type_id' => 'required|integer',
            'category_id' => 'required|integer',
            'name' => 'required',
            'city' => 'required',
            'locality' => 'required',
            'surface' => 'required',
            'pieces_number' => 'required',
            'price' => 'required',
            'caution' => 'required',
            'description' => 'required',
            'client_id' => 'required|integer',
            'status' => 'required|integer'
        ]);
        $slug = str_slug($request->name);
        $property = Property::find($id);

        //Verify existence
        $property->owner_id = $request->owner_id;
        $property->property_type_id = $request->property_type_id;
        $property->category_id = $request->category_id;
        $property->name = $request->name;
        $property->slug = $slug;
        $property->city = $request->city;
        $property->locality = $request->locality;
        $property->surface = $request->surface;
        $property->pieces_number = $request->pieces_number;
        $property->price = $request->price;
        $property->caution = $request->caution;
        $property->description = $request->description;
        $property->client_id = $request->client_id;
        $property->status = $request->status;

        $property->save();

        Toastr::success('Le bien a été modifié avec succès !','Moification réussie');
        return redirect()->route('admin.property.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);

        $property->delete();
        Toastr::success('Ce bien été supprimé avec succès !','Suppression réussie');
        return redirect()->back();
    }
}
