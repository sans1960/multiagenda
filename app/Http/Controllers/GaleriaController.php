<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $galerias = Galeria::all();
        return view('galerias.index',compact('galerias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galerias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = request()->validate([
      'title' => 'required',
      'image' => ['required', 'image'],
      'description'=>'required'
       ]);
       $imagePath = request('image')->store('uploads', 'public');
       $image = Image::make(public_path("storage/{$imagePath}"))->fit(600, 360);
       $image->save();
       Galeria::create([
         'title' => $data['title'],
         'image' => $imagePath,
         'description'=>$data['description']
     ]);

     return redirect()->route('galerias.index')->with('success', 'Your image has been successfully Uploaded');;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function show(Galeria $galeria)
    {
        return view('galerias.show',compact('galeria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeria $galeria)
    {
        return view('galerias.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeria $galeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeria  $galeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeria $galeria)
    {
        //
    }
}
