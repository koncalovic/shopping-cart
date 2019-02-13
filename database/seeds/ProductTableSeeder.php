<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/sorcerers-stone.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - then and now',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/sorcerers-stone.jpg',
            'title' => 'Some book 2',
            'description' => 'Super cool - then and now',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/sorcerers-stone.jpg',
            'title' => 'Some book 3',
            'description' => 'Super cool - then and now',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/sorcerers-stone.jpg',
            'title' => 'Some book 4',
            'description' => 'Super cool - then and now',
            'price' => 10
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.abebooks.com/images/books/harry-potter/sorcerers-stone.jpg',
            'title' => 'Some book 5',
            'description' => 'Super cool - then and now',
            'price' => 10
        ]);

        $product->save();
    }
}
