<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
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
            'civility' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'cni_number' => 'required|unique:clients',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'address' => 'required',
            'email' => 'required|unique:clients',
            'phone_number' => 'required|unique:clients',
        ]);

        //Get form image
        $slug = str_slug($request->name);

        //Verify existence
        $client = new Client();
        $client->civility = $request->civility;
        $client->firstname = $request->firstname;
        $client->lastname = $request->lastname;
        $client->slug = $slug;
        $client->cni_number = $request->cni_number;
        $client->birth_date = $request->birth_date;
        $client->birth_place = $request->birth_place;
        $client->address = $request->address;
        $client->email = $request->email;
        $client->phone_number = $request->phone_number;
        $client->save();

        Toastr::success('Le client a bien été ajouté !','Réussite');
        return redirect()->route('admin.client.index');
    }

    /**
     * Display the specified resourc    e.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $owner = Client::find($id);
        return view('admin.client.show',compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);
        return view('admin.client.edit',compact('client'));
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
            'civility' => 'required',
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
        $client = Client::find($id);

        $client->civility = $request->civility;
        $client->firstname = $request->firstname;
        $client->lastname = $request->lastname;
        $client->slug = $slug;
        $client->cni_number = $request->cni_number;
        $client->birth_date = $request->birth_date;
        $client->birth_place = $request->birth_place;
        $client->address = $request->address;
        $client->email = $request->email;
        $client->phone_number = $request->phone_number;
        $client->save();

        Toastr::success('Ce client a bien été modifié !','Mise à jour réussie');
        return redirect()->route('admin.client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);

        $client->delete();
        Toastr::success('Ce client a bien été supprimé !','Suppression réussie');
        return redirect()->back();
    }
}
