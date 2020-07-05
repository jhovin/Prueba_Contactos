<?php

namespace App\Http\Controllers;

use App\Contactos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $nombre = $request->get('search');
        //$datos = Contactos::where('Nombre','like',"%nombre%")->paginate(5); */
        //$datos['contactos']=Contactos::paginate(5);
        //return view('contactos.index',$datos);
        $contactos= Contactos::where('Nombre','like',"%$nombre%")->paginate(5);
        return view('contactos.index',compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contactos.create');
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
        $datosContacto=request()->except('_token');
        if($request->hasFile('Foto')){
            $datosContacto['Foto']=$request->file('Foto')->store('my-filed','s3');
            $datosContacto['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Contactos::insert($datosContacto);
        /* return response()->json($datosContacto); */
        return redirect('contactos')->with('Mensaje','Contacto agregado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show(Contactos $contactos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $contacto=Contactos::findOrFail($id);
        return view('contactos.edit',compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosContacto=request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
            $contacto=Contactos::findOrFail($id);

           Storage::delete('public/'.$contacto->Foto);
           $datosContacto['Foto']=$request->file('Foto')->store('uploads','public');
        /*    Storage::delete('my-file'.$contacto->Foto);
           $datosContacto['Foto']=$request->file('Foto')->store('my-filed','s3'); */
         
        }
        Contactos::where('id','=',$id)->update($datosContacto);
        /* $contacto=Contactos::findOrFail($id);
        return view('contactos.edit',compact('contacto')); */
        return redirect('contactos')->with('Mensaje','Contacto actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       /*  Contactos::destroy($id); */
       $contacto = Contactos::findOrFail($id);
        if(Storage::delete('public/'.$contacto->Foto)){
            Contactos::destroy($id);
        } 

        return redirect('contactos')->with('Mensaje','Contacto eliminado con éxito!');;
    }
}
