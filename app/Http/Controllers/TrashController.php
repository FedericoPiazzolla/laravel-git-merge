<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function trash() {
        $cocktails = Cocktail::onlyTrashed()->get();
        return view('trash', compact('cocktails'));
    }

    public function restore($id) {
        $cocktail = Cocktail::withTrashed()->find($id)->restore();
        return redirect()->route('cocktails.index');
    }

}
