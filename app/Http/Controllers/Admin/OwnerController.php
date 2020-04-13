<?php

namespace App\Http\Controllers\Admin;

use App\Owner;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = Owner::all();
        return view('admin.owner.index',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.owner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'civility' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'cni_number' => 'required|unique:owners',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'address' => 'required',
            'email' => 'required|unique:owners',
            'phone_number' => 'required|unique:owners',
        ]);

        $slug = str_slug($request->name);
        //Verify existence
        $owner = new Owner();
        $owner->civility = $request->civility;
        $owner->firstname = $request->firstname;
        $owner->lastname = $request->lastname;
        $owner->slug = $slug;
        $owner->cni_number = $request->cni_number;
        $owner->birth_date = $request->birth_date;
        $owner->birth_place = $request->birth_place;
        $owner->address = $request->address;
        $owner->email = $request->email;
        $owner->phone_number = $request->phone_number;
        $owner->save();

        Toastr::success('Le propriétaire a bien été ajouté !','Réussite');
        return redirect()->route('admin.owner.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owner = Owner::find($id);
        return view('admin.owner.show',compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $owner = Owner::find($id);
        return view('admin.owner.edit',compact('owner'));
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
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'cni_number' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        $slug = str_slug($request->name);
        $owner = Owner::find($id);
        $owner->firstname = $request->firstname;
        $owner->lastname = $request->lastname;
        $owner->slug = $slug;
        $owner->cni_number = $request->cni_number;
        $owner->birth_date = $request->birth_date;
        $owner->birth_place = $request->birth_place;
        $owner->address = $request->address;
        $owner->email = $request->email;
        $owner->phone_number = $request->phone_number;
        $owner->save();

        Toastr::success('Ce propriétaire a bien été modifié !','Mise à jour réussie');
        return redirect()->route('admin.owner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $owner = Owner::find($id);
        $owner->delete();
        Toastr::success('Ce propriétaire a bien été supprimé !','Suppression réussie');
        return redirect()->back();
    }
}
