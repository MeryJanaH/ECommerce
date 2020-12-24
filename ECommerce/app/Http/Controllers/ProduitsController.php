<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Models\Produit;
use App\Models\Categorie;
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
      $data = Produit::inRandomOrder()->get();
      $cat = Categorie::all();
      $new = Produit::all()->take(10);
      return view('website.backend.layouts.main', ['data'=>$data, 'cat' => $cat, 'new'=>$new]);
    }

    public function AddToCart(Request $request, $id)
    {
        $src=$request->input('qty');
        //$request->session()->forget('cart');
        //$request->session()->flush();
        $prevCart = $request -> session() ->get('cart');
        $cart = new Cart($prevCart);
        $product = Produit::find($id);
        $cart->AddItem($id, $product,$src);
        $request->session()->put('cart', $cart);
        //dump($cart);
        return redirect()->route('boutique');
    }


    public function AddToCart_up(Request $request, $id)
    {
        //$request->session()->forget('cart');
        //$request->session()->flush();
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        $product = Produit::find($id);
        $cart->AddItem($id, $product,1);
        $request->session()->put('cart', $cart);
        //dump($cart);
        return redirect()->route('cart');
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
        $src = $request->input('qty');
        $cart = $request->session()->get('cart');
        if(array_key_exists($id,$cart->items)){
            unset($cart->items[$id]);
        }

        $prevCart = $request->session()->get('cart');
        $updatedCart = new Cart($prevCart);
        $updatedCart->updatePriceQuantity($src);

        $request->session()->put("cart",$updatedCart);

        return redirect()->route('cart');
    }

    public function AddToCart_down(Request $request, $id)
    {
        //$request->session()->forget('cart');
        //$request->session()->flush();
        $prevCart = $request->session()->get('cart');
        $cart = new Cart($prevCart);
        $product = Produit::find($id);
        $cart->AddItem_down($id, $product);
        $request->session()->put('cart', $cart, 1);
        //dump($cart);
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
        $prod_cat = \App\Models\Produit::where('cat_id', $tmp[0]['id'])->paginate(9);
        $data_cat = \App\Models\Categorie::all();

        return view('website.backend.layouts.shop', ['prod_cat' => $prod_cat, compact('prod_cat'), 'data_cat' => $data_cat, 'nom_cat' => $nom]);
    }
    public function detail($id)
    {
        $id_p = \App\Models\Produit::where('id', $id)->get();
        $id_rel = \App\Models\Produit::where('cat_id', $id_p[0]['cat_id'])->inRandomOrder()->get();
        return view('website.backend.layouts.detail',['info_prod' => $id_p,'rel_prod' => $id_rel]);
    }

    public function createNewOrder(Request $request)
    {
        $cart = Session::get('cart');

        $name = $request->input('fname');
        $adresse = $request->input('add');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $zip = $request->input('zip-code');
        $country = $request->input('country');
        $city = $request->input('city');

        $total = $cart->totalPrice + $cart->totalShipping;

        //cart not empty
        if($cart){
            $date = date('Y-m-d H:i:s');
            $newOrderArray = array("status"=>"on_hold","date"=>$date,"del_date"=>$date,"price"=>$total,
            "name"=>$name,"adresse"=>$adresse,"email"=>$email,"phone"=>$phone,"zip"=>$zip,"country"=>$country,"city"=>$city);
            $created_order=DB::table("orders")->insert($newOrderArray);
            $order_id = DB::getPdo()->lastInsertId();

        foreach($cart->items as $cart_item){
            $item_id = $cart_item['data']['id'];
            $item_name = $cart_item['data']['nom_prod'];
            $item_price = $cart_item['data']['prix'];
            $newItemsInCurrentOrder = array("item_id"=>$item_id, "order_id"=>$order_id, "item_name"=>$item_name, "item_price"=>$item_price);
            $created_order_items = DB::table("order_items")->insert($newItemsInCurrentOrder);
        }

        //delete cart
        Session::forget("cart");

        $pay_info = $newOrderArray;
        $pay_info["order_id"] = $order_id;
        $request->session()->put('pay_info', $pay_info);

            return redirect()->route("showPaypage");

        }else{
            return redirect()->route("boutique");
        }
    }

    public function check_order()
    {
        return view("website.backend.layouts.payment.checkout");
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

    public function ajout_prod(Request $request)
    {
        if($request->hasfile('photo')){
            $file = $request -> file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('assets/images/products',$filename);
            $request->photo = $filename;
        }
        else
        {
            return $request;
            $request->photo  = '';
        }

        $quant = $request->input('quant');
        $prod = $request->input('prod');
        $desc = $request->input('desc');
        $prix = $request->input('prix');
        $catg = $request->input('catg');
        $liv = $request->input('liv');

        DB::insert("insert into produits (quantite,nom_prod,photo,description,prix,shipping,cat_id) values ($quant,'$prod','$request->photo','$desc',$prix,'$liv',$catg)");

        return view("website.backend.layouts.admin.admin_prod");
    }
}
