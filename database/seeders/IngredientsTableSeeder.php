<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = ['Mint','Lemon juice','Sugar','Soda','Rum','Vodka','Whiskey','Tequila','Martini'];

        foreach ($ingredients as $ingredient) {
            $new_ingredient = new Ingredient();
            $new_ingredient->name = $ingredient;
            $new_ingredient->save();
        };
    }
}
