<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CocktailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cocktail = new Cocktail();
        $cocktail->name ='Mojito';
        $cocktail->price =10.00;
        $cocktail->type ='Muddled';
        $cocktail->is_alcolic = true;
        $cocktail->save();
        
    }
}
