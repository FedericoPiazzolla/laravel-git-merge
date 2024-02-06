<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    public function index() {
        $cocktails = Cocktail::paginate(8);
        return response()->json([
            'results' => $cocktails,
            'success' => true,
        ]);
    }
}
