<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            'Microcontrollers', // 1
            'Breakout Boards', // 2
            'Wireless Communication', // 3
            'Sensors', // 4
            'Components', // 5
            'Single Board Computers', // 6
            'Integrated Circuits', // 7
            'Motors', // 8
            'Cables', // 9
            'Switches & Buttons', // 10
            'Battery & Accessories', // 11
            'Sockets & Connectors', // 12
            'PCB Materials', // 13
            'Displays', // 14
            'Miscellaneous', // 15
        );

        foreach($categories as $cat){
            $category = new Category();
            $category->name=$cat;
            $category->save();
        }

    }
}
