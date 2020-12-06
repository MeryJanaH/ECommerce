<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Produit::all();
      return view('website.backend.layouts.main', ['data'=>$data]);
    }

    public function AddToCart(Request $request, $id)
    {
        //$request->session()->forget('cart');
        //$request->session()->flush();
        $prevCart = $request -> session() ->get('cart');
        $cart = new Cart($prevCart);
        $product = Produit::find($id);
        $cart->AddItem($id, $product);
        $request->session()->put('cart', $cart);
        //dump($cart);
        return redirect()->route('boutique');
    }

    public function ShowCart()
    {
        $cart = Session::get('cart');
        //if cart not empty
        if($cart)
        {
            return view('website.backend.layouts.cart',['cartItems'=>$cart]);
        }
        else
        {
            return redirect()->route('boutique');
        }
    }

    public function deleteItemCart(Request $request,$id)
    {
        $cart = $request->session()->get('cart');
        if(array_key_exists($id,$cart->items)){
            unset($cart->items[$id]);
        }

        $prevCart = $request->session()->get('cart');
        $updatedCart = new Cart($prevCart);
        $updatedCart->updatePriceQuantity();

        $request->session()->put("cart",$updatedCart);

        return redirect()->route('cart');
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
     * @param  \App\Models\Produit  $Produits
     * @return \Illuminate\Http\Response
     */
    public function show(string $nom)
    {
        $tmp = \App\Models\Categorie::where('nom', $nom)->get();
        $prod_cat = \App\Models\Produit::where('cat_id', $tmp[0]['id'])->paginate(12);
        $data_cat = \App\Models\Categorie::all();

        return view('website.backend.layouts.shop', ['prod_cat' => $prod_cat, 'data_cat' => $data_cat, 'nom_cat' => $nom]);
    }
    public function detail($id)
    {
        $id_p = \App\Models\Produit::where('id', $id)->get();
        $id_rel = \App\Models\Produit::where('cat_id', $id_p[0]['cat_id'])->inRandomOrder()->get();
        return view('website.backend.layouts.detail',['info_prod' => $id_p,'rel_prod' => $id_rel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produits)
    {
        //
    }
}
