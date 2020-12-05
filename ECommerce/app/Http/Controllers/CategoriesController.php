<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function boutique()
    {
        $data_cat = Categorie::all();
        $prod_cat = \App\Models\Produit::inRandomOrder()->paginate(12);
        return view('website.backend.layouts.shop', ['data_cat' => $data_cat, 'prod_cat' => $prod_cat]);
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
     * @param  \App\Models\Categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data_cat = Categorie::all();
        return view('website.backend.layouts.shop', ['data_cat' => $data_cat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categories)
    {
        //
    }
}
