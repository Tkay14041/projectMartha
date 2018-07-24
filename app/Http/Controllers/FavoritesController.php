<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Restaurant;

class FavoritesController extends Controller
{
    public function show() 
    {
    	return view('users.show');
    }
    
    public function favorite(Request $request)
    {
    	$shopfavorite = $request->input('shopfavorite');
    	var_dump($shopfavorite);
    	
    	$int = intval($shopfavorite[0]);
    	var_dump($int);
    	
    	$query = Item::select('*')->join('shops', 'items.shop_id', '=', 'shops.id');
    	$ints = [];
    	
    	foreach ($shopfavorite as $fav) {
    		$int = intval($fav);
    		$ints += $int;
    	}
    	var_dump($ints);
    }
}
