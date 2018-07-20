<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant;
use App\Menu;
use App\Item;

class RestaurantsController extends Controller
{
    function search(Request $request) 
    {
        $genre = $request->input('genre');
        
        //Achtung! Config muss geändert werden, von "strinct => true" zu "strict => false" in mysql in config/database.php
        
        // $query = Restaurant::select('*')->join('menus', 'restaurants.id', '=', 'menus.restaurant_id');
        $query = Restaurant::select('*');
        $menus = Restaurant::select('*')->join('menus', 'restaurants.id', '=', 'menus.restaurant_id')->get();
       
        //search by genre
        if($genre != null) {
            $query->where('genre', '=', $genre);
        }
        
        $restaurants = $query->get();
        
        $queryA = Item::select(\DB::raw('COUNT(*) as count'));
        $queryA->where('price', '<=', 2500);
        $A = $queryA->get();
        
        $queryB = Item::select(\DB::raw('COUNT(*) as count'));
        $queryB->where('price', '>', 2500);
        $queryB->where('price', '<=', 7500);
        $B = $queryB->get();
        
        $queryC = Item::select(\DB::raw('COUNT(*) as count'));
        $queryC->where('price', '>', 7500);
        $queryC->where('price', '<=', 12500);
        $C = $queryC->get();
        
        $queryD = Item::select(\DB::raw('COUNT(*) as count'));
        $queryD->where('price', '>', 12500);
        $queryD->where('price', '<=', 17500);
        $D = $queryD->get();
        
        $queryE = Item::select(\DB::raw('COUNT(*) as count'));
        $queryE->where('price', '>', 17500);
        $queryE->where('price', '<=', 22500);
        $E = $queryE->get();
        
        $queryF = Item::select(\DB::raw('COUNT(*) as count'));
        $queryF->where('price', '>', 22500);
        $queryF->where('price', '<=', 27500);
        $F = $queryF->get();
        
        $queryG = Item::select(\DB::raw('COUNT(*) as count'));
        $queryG->where('price', '>', 27500);
        $queryG->where('price', '<=', 32500);
        $G = $queryG->get();
        
        $queryH = Item::select(\DB::raw('COUNT(*) as count'));
        $queryH->where('price', '>', 32500);
        $queryH->where('price', '<=', 37500);
        $H = $queryH->get();
        
        $queryI = Item::select(\DB::raw('COUNT(*) as count'));
        $queryI->where('price', '>', 37500);
        $queryI->where('price', '<=', 42500);
        $I = $queryI->get();
        
        $queryJ = Item::select(\DB::raw('COUNT(*) as count'));
        $queryJ->where('price', '>', 42500);
        $queryJ->where('price', '<=', 47500);
        $J = $queryJ->get();
        
        $queryK = Item::select(\DB::raw('COUNT(*) as count'));
        $queryK->where('price', '>', 47500);
        $queryK->where('price', '<=', 52500);
        $K = $queryK->get();
        
        $queryL = Item::select(\DB::raw('COUNT(*) as count'));
        $queryL->where('price', '>', 52500);
        $queryL->where('price', '<=', 57500);
        $L = $queryL->get();
        
        $queryM = Item::select(\DB::raw('COUNT(*) as count'));
        $queryM->where('price', '>', 57500);
        $queryM->where('price', '<=', 62500);
        $M = $queryM->get();
        
        $queryN = Item::select(\DB::raw('COUNT(*) as count'));
        $queryN->where('price', '>', 62500);
        $queryN->where('price', '<=', 67500);
        $N = $queryN->get();
        
        $queryO = Item::select(\DB::raw('COUNT(*) as count'));
        $queryO->where('price', '>', 67500);
        $queryO->where('price', '<=', 72500);
        $O = $queryO->get();
        
        $queryP = Item::select(\DB::raw('COUNT(*) as count'));
        $queryP->where('price', '>', 72500);
        $queryP->where('price', '<=', 77500);
        $P = $queryP->get();
        
        $queryQ = Item::select(\DB::raw('COUNT(*) as count'));
        $queryQ->where('price', '>', 77500);
        $queryQ->where('price', '<=', 82500);
        $Q = $queryQ->get();
        
        $queryR = Item::select(\DB::raw('COUNT(*) as count'));
        $queryR->where('price', '>', 82500);
        $queryR->where('price', '<=', 87500);
        $R = $queryR->get();
        
        $queryS = Item::select(\DB::raw('COUNT(*) as count'));
        $queryS->where('price', '>', 87500);
        $queryS->where('price', '<=', 92500);
        $S = $queryS->get();
        
        $queryT = Item::select(\DB::raw('COUNT(*) as count'));
        $queryT->where('price', '>', 92500);
        $queryT->where('price', '<=', 97500);
        $T = $queryT->get();
        
        $queryU = Item::select(\DB::raw('COUNT(*) as count'));
        $queryU->where('price', '>', 97500);
        $U = $queryU->get();
        
        return view('layouts.app', [
                'restaurants' => $restaurants,
                'menus' => $menus,
                'A' => $A,
	            'B' => $B,
	            'C' => $C,
	            'D' => $D,
	            'E' => $E,
	            'F' => $F,
	            'G' => $G,
	            'H' => $H,
	            'I' => $I,
	            'J' => $J,
	            'K' => $K,
	            'L' => $L,
	            'M' => $M,
	            'N' => $N,
	            'O' => $O,
	            'P' => $P,
	            'Q' => $Q,
	            'R' => $R,
	            'S' => $S,
	            'T' => $T,
	            'U' => $U,
	            ]);
    }
        
}
