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
    public function show(string $nom)
    {
        $tmp = \App\Models\categorie::where('nom', $nom)->get();
        $prod_cat = \App\Models\produit::where('cat_id', $tmp[0]['id'])->paginate(12);
        $data_cat = \App\Models\categorie::all();

        return view('website.backend.layouts.shop', ['prod_cat' => $prod_cat, 'data_cat' => $data_cat, 'nom_cat' => $nom]);
    }
    public function detail($id)
    {
        $id_p = \App\Models\produit::where('id', $id)->get();
        $id_rel = \App\Models\produit::where('cat_id', $id_p[0]['cat_id'])->inRandomOrder()->get();
        return view('website.backend.layouts.detail',['info_prod' => $id_p,'rel_prod' => $id_rel]);
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
