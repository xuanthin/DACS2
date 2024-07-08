<?php
namespace App\Models;
class Cart{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($cart){
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->totalQuantity = $cart->totalQuantity;
        }
    }
    public function AddCart($products, $id){
        $newProduct = ['quantity' => 0, 'price' => $products->product_price, 'productInfo' => $products];
        if($this->products){
            if(array_key_exists($id, $products)){
                $newProduct = $products[$id];
            }
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $products->product_price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $products->product_price;
        $this->totalQuantity++;
    }
}
?>