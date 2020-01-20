<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        dd("haaay haaaay");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request->input('age'));
      if($request->is('api/*')){

        // dd($request->path());
        // dd($request->fullurl());
        // dd($request->url());
      }
     // dd($request->input('cat'));
     //        dd($request->method());
    /* if($request->isMethod('post')){
       $data = $request->all();
       dd($data);
     } */
    /* $lay = $request->input('name',$request->age);
    dd($lay); */
    // dd($request->input('names.*'));
    // dd($request->input('produits.*.name'));
    // dd($request->query());
   // dd($request->only(['age','cat']));
    /* if($request->has('age')){
     dd($request->except('produits'));
     } */

  /*   if($request->filled('name')){
       dd($request->age);
     }
     dd($request->cat); */

    // $request->flash();
     // dd($request->file('photo'));
    /* if($request->file('photo')->isValid()){
      // dd($request->photo->path());
       dd($request->photo->extension());
     } */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
