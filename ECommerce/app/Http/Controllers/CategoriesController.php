<?php

namespace App\Http\Controllers;

use App\models\categorie;
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
        $data_cat = categorie::all();
        $data = \App\models\produit::inRandomOrder()->get();
        return view('website.backend.layouts.shop', ['data_cat' => $data_cat, 'data' => $data]);
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
     * @param  \App\models\categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data_cat = categorie::all();
        return view('website.backend.layouts.shop', ['data_cat' => $data_cat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(categorie $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, categorie $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\categorie  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(categorie $categories)
    {
        //
    }
}
