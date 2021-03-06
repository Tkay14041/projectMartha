<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Restaurant;
use App\Shop;
use App\Menu;

class FavoritesController extends Controller
{
    public function show() 
    {
    	return view('users.show');
    }
    
    public function favorite(Request $request)
    {
        $shopfavorite = $request->input('shopfavorite');
        $items = [];
        if(!empty($shopfavorite)) {
        	
            // var_dump($shopfavorite);
        	
        	// $int = intval($shopfavorite[0]);
        	// var_dump($int);
        	
        	
        // 	$ints = [];
        	
        	
        	$count = count($shopfavorite);
        	
        	for ($i = 0; $i < $count; $i ++) {
        // 		$int = intval($shopfavorite[$i]);
                $id = $shopfavorite[$i];
        		$query = Item::select('*')->join('shops', 'items.shop_id', '=', 'shops.id');
        		$item = $query->where('items.image_path', '=', $id)->first();
        		$items[$i] = $item;
        	}
        }
        
    	$foodfavorite = $request->input('foodfavorite');
    	$restaurants = [];
    	if(!empty($foodfavorite)) {
    	
        	$ints_food = [];
        	
        	
        	$count_food = count($foodfavorite);
        	
        	for ($j = 0; $j < $count_food; $j ++) {
        		$int_food = intval($foodfavorite[$j]);
        		$query = Restaurant::select('*');
        		$restaurant = $query->where('restaurants.id', '=', $int_food)->first();
        		$restaurants[$j] = $restaurant;
        	}
    	}
    	
    	$menus = Restaurant::select()->join('menus', 'restaurants.id', '=', 'menus.restaurant_id')->get();
    	$shouhin = Shop::select()->join('items', 'shops.id', '=', 'items.shop_id')->get();
    	
    	if($items != null && $restaurants != null) { 
        	return view('users.show', [
        		'items' => $items,
        		'restaurants' => $restaurants,
        		'shouhin' => $items,
        		'menus' => $menus,
        		]);
    	} elseif ($items != null && $restaurants == null) {
    	    return view('users.show', [
        		'items' => $items,
        		'shouhin' => $items,
        		]);
    	} elseif ($items == null && $restaurants != null) {
    	    return view('users.show', [
        		'restaurants' => $restaurants,
        		'menus' => $menus,
        		]);
    	}
    	
    	
    }
}
