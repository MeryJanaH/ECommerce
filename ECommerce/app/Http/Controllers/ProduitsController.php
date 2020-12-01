<?php

namespace App\Http\Controllers;

use App\models\produit;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = produit::all();
      return view('website.backend.layouts.main', ['data'=>$data]);
    }

    public function boutique()
    {
        $data= produit::all();
        return view('website.backend.layouts.shop', ['data'=>$data]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function show(produit $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit(produit $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produit $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function destroy(produit $produits)
    {
        //
    }
}
