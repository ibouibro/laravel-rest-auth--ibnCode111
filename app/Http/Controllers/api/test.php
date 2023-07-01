<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class test extends Controller
{
    //

    function getProduits()
    {
        $produits=['nom' => 'ibrahima niang',
        'métier' => 'developpeur'];

        return response()->json([
            'message' => "Product updated successfully!",
            'product' => $produits
        ], 200);
        
    }
}
