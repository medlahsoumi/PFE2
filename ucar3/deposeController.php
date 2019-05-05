<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('pages.depose');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $user= new Form();
        $user->name=$request->get('type');
        $user->Cin=$request->get('cin');
        $user->nom=$request->get('nom');
        $user->prenom=$request->get('prenom');
        $user->email=$request->get('mail');
        $user->telephone=$request->get('tel');
        $user->specialite=$request->get('specialite');
        $user->communication=$request->get('communication');
        $user->publication=$request->get('publication');
        $user->experiencePedagogiqueSecondaire=$request->get('publication');
        $user->experiencePedagogiqueSupérieur=$request->get('publication');
        //------____------____------____------//
        $user->minlength=$request->get('minlength');
        $user->maxlength=$request->get('maxlength');
        $user->minvalue=$request->get('minvalue');
        $user->maxvalue=$request->get('maxvalue');
        $user->url=$request->get('url');
        $user->filename=$request->get('filename');
        $user->save();
        return redirect('forms')->with('success', 'Data has been added');
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
