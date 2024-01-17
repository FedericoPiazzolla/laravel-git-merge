<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;

class CocktailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        // $cocktail = new Cocktail();
        // $cocktail->name ='Mojito';
        // $cocktail->price =10.00;
        // $cocktail->type ='Muddled';
        // $cocktail->is_alcolic = true;
        // $cocktail->save();

        // $drink_name =['mojito', 'negroni' , 'spritz' ,'long island'];
        // $drink_type = ['muddled', 'build', 'shake', 'stir and strain'];
        // $drink_price = [5.00, 10.00 , 8.00, 12.00];
        
        // for($i=0; $i < 20; $i++ ){
        // $cocktail = new Cocktail();
        // $cocktail->name = $faker->randomElement($drink_name);
        // $cocktail->price =$faker->randomElement($drink_price);
        // $cocktail->type = $faker->randomElement($drink_type);
        // $cocktail->is_alcolic = $faker->boolean();
        // $cocktail->save();
        // };

        $rows = $this->getData(2);
        
        foreach ($rows as $row) {
            $cocktail               = new Cocktail(); 
            $cocktail->name         = $row->strDrink;
            $cocktail->glass        = $row->strGlass;
            $cocktail->instruction  = $row->strInstructionsIT;
            $cocktail->image        = $row->strDrinkThumb;
            $cocktail->is_alcoholic = $row->strAlcoholic;

            $cocktail->save();
        }
    }

    protected function getData(int $total = 10)
    {
        $rows   = [];
        $url    = 'https://www.thecocktaildb.com/api/json/v1/1/random.php';
        $client = new Client(['verify' => false]);

        for ($i = 0; $i < $total; $i++) {
            $response = $client->get($url);
            $row      = json_decode($response->getBody());
            $rows     = [...$rows, ...$row->drinks];
        }
        return $rows;
    }
}
