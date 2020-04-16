<?php

namespace App\Http\Controllers;

use App\CategorieTache;
use Illuminate\Http\Request;

class CategorieTacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categoriesTaches= CategorieTache::all();

        return view('categoriestaches.index',['categoriesTaches'=>$categoriesTaches]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorieTache = new CategorieTache();

        return view('categoriestaches.create', ['categorieTache'=>$categorieTache]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        CategorieTache::create($data);
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categorieTache = CategorieTache::find($id);
        return view('categoriestaches.edit', ['categorieTache'=> $categorieTache]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategorieTache $categorieTache)
    {
        $data = $request->all();
        $categorieTache->update($data);
        return redirect()->route('categoriestaches.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategorieTache::where('id', $id)->delete();

        return redirect()->route('categoriestaches.index');
    }
    public  function confirmation($id){

        $categorieTache = CategorieTache::find($id);
        return view('categoriestaches.confirmationSuppression',['categorieTache'=>$categorieTache]);
    }
}
