<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Shop;

use \App\Item;

class ItemsController extends Controller
{
    function search(Request $request) 
    {
        // $price = $request->input('price');
        
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        
        $sex = $request->input('sex');
        $genre = $request->input('genre');
        $color = $request->input('color');
        $scene = $request->input('scene');
        
        // $minPrice = intval($minPrice);
        // $maxPrice = intval($maxPrice);
        
        // var_dump($minPrice);
        
        //Achtung! Config muss geändert werden, von "strinct => true" zu "strict => false" in mysql in config/database.php
        
        $query = Item::select('*', \DB::raw('COUNT(*) as count'))->join('shops', 'items.shop_id', '=', 'shops.id')->groupBy(\DB::raw('shop_id'));
       
        //search by price
        $query->where('price', '>=', $minPrice);
        if ($maxPrice < 100000) {
            $query->where('price', '<=', $maxPrice);
        } 
        
        //search by sex
        if($sex != null) {
            $query->where('sex', '=', $sex);
        }
        
        //search by genre
        if($genre != null) {
            $query->where('genre', '=', $genre);
        }
        
        //search by color
        if($color != null) {
            $query->where('color', '=', $color)->orWhere('color', '=', 'ALL');
        }
        
        //search by scene
        if($scene != null) {
            $query->where('scene', '=', $scene);
        }
        
        $items = $query->get();
        
        $shouhin = Shop::select()->join('items', 'shops.id', '=', 'items.shop_id')->get();
        
        // $items = Item::select()->join('shops', 'items.shop_id', '=', 'shops.id')->get();
        return view('layouts.app', [
                'items' => $items,
                'shouhin' => $shouhin,
            ]);
    }
}
