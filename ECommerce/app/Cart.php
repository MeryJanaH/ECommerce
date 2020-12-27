<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\CartStore;
class Cart
{
    public $items; //[id=>['quantity' =>,'price' =>,'data'=>],..]
    public $totalQuantity;
    public $totalPrice;

    //cart constructor
    public function __construct($prevCart)
    {
        if ($prevCart != NULL) {
            $this->items = $prevCart->items;
            $this->totalQuantity = $prevCart->totalQuantity;
            $this->totalPrice = $prevCart->totalPrice;
            $this->totalShipping = $prevCart->totalShipping;
        } else {
            $this->items = [];
            $this->totalQuantity = 0;
            $this->totalPrice = 0;
            $this->totalShipping = 0;
        }
    }

    public function AddItem($id, $produit,$src)
    {
        if (isset((Auth::User()->email))) {
            $connected_user = Auth::User()->id;
        } else {
            return view('website.backend.layouts.users.login');
        }

        $price = (int) ($produit->prix);

        if($produit->shipping == "free")
        {$ship = 0;}
        else
        {$ship = $produit->shipping;}

        //item already exists
        if (array_key_exists($id, $this->items)) {
            $ProdToAdd = $this->items[$id];
            $ProdToAdd['quantity']=$ProdToAdd['quantity']+$src;
            $ProdToAdd['totalSinglePrice']= $ProdToAdd['quantity'] * $price;

            $qty = $ProdToAdd['quantity'];
            $prx = $ProdToAdd['totalSinglePrice'];

            CartStore::where('prod_id', $id)->where('user_id', $connected_user)
                ->update(['quantite' => $qty, 'totalSinglePrice' => $prx]);

        } else {
            $ProdToAdd = ['quantity' => $src, 'totalSinglePrice' => $src*$price, 'data' => $produit];
            $totPriceS = $src * $price;

            DB::insert("insert into cart_stores (user_id,prod_id,quantite,totalSinglePrice) values ($connected_user,$id,$src,$totPriceS)");
        }
        $price = (int) ($produit->prix) * $src;

        $this->items[$id] = $ProdToAdd;
        $this->totalPrice = $this->totalPrice + $price;
        $this->totalShipping = $this->totalShipping + $ship*$src;
    }


    public function AddItem_down($id, $produit)
    {
        if (isset((Auth::User()->email))) {
            $connected_user = Auth::User()->id;
        } else {
            return view('website.backend.layouts.users.login');
        }

        $price = (int) ($produit->prix);
        if ($produit->shipping == "free") {
            $ship = 0;
        } else {
            $ship = $produit->shipping;
        }

        //item already exists
        if (array_key_exists($id, $this->items)) {
            $ProdToAdd = $this->items[$id];
            $ProdToAdd['quantity']--;
            $ProdToAdd['totalSinglePrice'] = $ProdToAdd['quantity'] * $price;

            $qty = $ProdToAdd['quantity'];
            $prx = $ProdToAdd['totalSinglePrice'];

            CartStore::where('prod_id', $id)->where('user_id', $connected_user)
            ->update(['quantite' => $qty, 'totalSinglePrice' => $prx]);
        }
        if(isset($ProdToAdd)) {
            if($ProdToAdd['quantity'] == 0)
            {
                CartStore::where('prod_id', $id)->where('user_id', $connected_user)
                ->delete();
                $this->updatePriceQuantity(1);
            }
            else
            {
            $this->items[$id] = $ProdToAdd;
            $this->totalPrice = $this->totalPrice - $price;
            $this->totalShipping = $this->totalShipping - $ship;
            }
        }
    }


    public function updatePriceQuantity($src)
    {
        $totalPrice = 0;
        $totalQuantity = 0;
        $totalShipping = 0;

        foreach($this->items as $item)
        {
            $totalQuantity += $item['quantity'];
            $totalPrice += $item['totalSinglePrice'];
            if($item['data']['shipping'] == "free")
            $totalShipping += 0;
            else
            $totalShipping += $item['data']['shipping'];
        }
        $this ->totalQuantity = $totalQuantity;
        $this ->totalPrice = $totalPrice;
        $this->totalShipping = $totalShipping;
    }
}
