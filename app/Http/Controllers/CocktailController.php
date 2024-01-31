<?php

namespace App\Http\Controllers;
use illuminate\Support\Str;

use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cocktails  = Cocktail::paginate(4);
        
        return view('cocktails.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cocktails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->all();
        $cocktail = new Cocktail(); 
        $cocktail->fill($form_data);
        $cocktail->slug = Str::slug ($cocktail->name, '-');
        $cocktail->save();
        return redirect()->route('cocktails.show', ['cocktail' => $cocktail->slug]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param Cocktail $cocktail
     * @return \Illuminate\Http\Response
     */
    public function show(Cocktail $cocktail)
    {
        return view('cocktails.show', compact('cocktail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cocktail $cocktail
     * @return \Illuminate\Http\Response
     */
    public function edit(Cocktail $cocktail)
    {
        return view('cocktails.edit', compact('cocktail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cocktail $cocktail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cocktail $cocktail)
    {
        // dd($request);
        $form_data = $request->all();
        $cocktail->update($form_data);

        return redirect()->route('cocktails.show',['cocktail'=>$cocktail->slug]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Cocktail $cocktail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cocktail $cocktail)
    {
        $cocktail->delete();
        
        return redirect()->route('cocktails.index')->with('message',"$cocktail->name è stato cancellato con successo!");
    }

}
