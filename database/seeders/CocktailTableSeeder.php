<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CocktailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        // $cocktail = new Cocktail();
        // $cocktail->name ='Mojito';
        // $cocktail->price =10.00;
        // $cocktail->type ='Muddled';
        // $cocktail->is_alcolic = true;
        // $cocktail->save();

        $drink_name =['mojito', 'negroni' , 'spritz' ,'long island'];
        $drink_type = ['muddled', 'build', 'shake', 'stir and strain'];
        $drink_price = [5.00, 10.00 , 8.00, 12.00];
        
        for($i=0; $i < 20; $i++ ){
        $cocktail = new Cocktail();
        $cocktail->name = $faker->randomElement($drink_name);
        $cocktail->price =$faker->randomElement($drink_price);
        $cocktail->type = $faker->randomElement($drink_type);
        $cocktail->is_alcolic = $faker->boolean();
       
        $cocktail->save();
        };

    }
}
