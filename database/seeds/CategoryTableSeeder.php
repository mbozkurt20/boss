<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = array(
            array("category_name" => "PRODUCTS", "slug" => "product"),
            array("category_name" => "THE CABLE LAB", "slug" => "lab"),

        );

        foreach ($categories as $category)
        {
            Category::create($category);
        }
    }
}
