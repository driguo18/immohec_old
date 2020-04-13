<?php

namespace App\Http\Controllers\Admin;

use App\Property_type;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Property_typeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property_types = Property_type::all();
        return view('admin.property_type.index',compact('property_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.property_type.create');
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
            'name' => 'required'
        ]);
        $property_type = new Property_type();
        $property_type->name = $request->name;
        $property_type->slug = str_slug($request->name);
        $property_type->save();
        Toastr::success('Le type de bien a bien été ajouté !','Réussite');
        return redirect()->route('admin.property_type.index');
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
        $property_type = Property_type::find($id);
        return view('admin.property_type.edit',compact('property_type'));
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
        $property_type = Property_type::find($id);
        $property_type->name = $request->name;
        $property_type->slug = str_slug($request->name);
        $property_type->save();
        Toastr::success('Le type de bien a bien été mis à jour !','Modification réussie');
        return redirect()->route('admin.property_type.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Property_type::find($id)->delete();
        Toastr::success('Type de bien supprimé avec succès !!!','Suppression réussie !');
        return redirect()->back();
    }
}
