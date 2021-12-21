<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i <= 4; $i++) {
            $product_id = 1;
            if($i == 4){
                $product_id = 2;
            }
           Photo::create(['product_id'=>$product_id,'photo'=>"$i.jpg"]);
        }
    }
}
