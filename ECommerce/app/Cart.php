<?php

namespace App;

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
        } else {
            $this->items = [];
            $this->totalQuantity = 0;
            $this->totalPrice = 0;
        }
    }

    public function AddItem($id, $produit)
    {
        $price = (int) ($produit->prix);
        //item already exists
        if (array_key_exists($id, $this->items)) {
            $ProdToAdd = $this->items[$id];
            $ProdToAdd['quantity']++;
            $ProdToAdd['totalSinglePrice']= $ProdToAdd['quantity'] * $price;
        } else {
            $ProdToAdd = ['quantity' => 1, 'totalSinglePrice' => $price, 'data' => $produit];
        }
        $this->items[$id] = $ProdToAdd;
        $this->totalPrice = $this->totalPrice + $price;
        $this->totalQuantity++;
    }


    public function updatePriceQuantity()
    {
        $totalPrice = 0;
        $totalQuantity = 0;

        foreach($this->items as $item)
        {
            $totalQuantity += $item['quantity'];
            $totalPrice += $item['totalSinglePrice'];
        }
        $this -> totalQuantity = $totalQuantity;
        $this -> totalPrice = $totalPrice;
    }
}
