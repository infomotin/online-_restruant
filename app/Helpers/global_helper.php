<?php

use function PHPUnit\Framework\throwException;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;
if(!function_exists('generateUniqueSlug')) {
    // function dd($data) {
    //     echo '<pre>';
    //     print_r($data);
    //     echo '</pre>';
    //     die();
    // }
    function generateUniqueSlug($model,$name) {
        $modleClass = "App\\Models\$model";
        if(!class_exists($modleClass)){
            throw new \InvalidArgumentException("Model $model not Found");
        }
        $slug = Str::slug($name);
        $count =2;
        //checking in model cloumm name like slug 
        while($modleClass::where('slug',$slug)->exists()){
            $slug = Str::slug($name).'-'.$count;
            $count ++;
        }
        return $slug;
    }
    
}

if(!function_exists('getCurrencySymbolPosition ')){
    function getCurrencySymbolPosition($price){
        // dd($price);
        if(config('settings.currency_position' === 'left')){
            return config('settings.app_simbol').$price;
        }else{
            return $price.config('settings.app_simbol');
        }
    }
}

// calculetive cart total 

if(!function_exists('cartTotal')){
    function cartTotal(){
        // contain total value for a variable name 
        $total = 0;
        foreach(Cart::content() as $item){
           $productPrice = $item->price;
           $sizePrice = $item->options?->product_size['price'] ?? 0;
           $optionsPrice = 0;
           foreach($item->options?->product_option as $option){
               $optionsPrice += $option['price'];
           }
           $total += ($productPrice + $sizePrice + $optionsPrice) * $item->qty;
        }
        return $total;
    }
}