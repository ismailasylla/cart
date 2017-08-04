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

            'imagePath'=>'https://s3.amazonaws.com/digitaltrends-uploads-prod/2016/10/MacBook-Pro-2016_001.jpg',
            'title'=>'Macbook Pro 2017',
            'description'=>'Macbook Pro Retina 15 2017',
            'price'=> 2000

        ]);

        $product->save();


        $product = new \App\Product([

            'imagePath'=>'https://s3.amazonaws.com/digitaltrends-uploads-prod/2016/10/MacBook-Pro-2016_001.jpg',
            'title'=>'Macbook Pro 2017',
            'description'=>'Macbook Pro Retina 15 2017',
            'price'=> 2000

        ]);

        $product->save();

        $product = new \App\Product([

            'imagePath'=>'https://s3.amazonaws.com/digitaltrends-uploads-prod/2016/10/MacBook-Pro-2016_001.jpg',
            'title'=>'Macbook Pro 2017',
            'description'=>'Macbook Pro Retina 15 2017',
            'price'=> 2000

        ]);

        $product->save();

        $product = new \App\Product([

            'imagePath'=>'https://s3.amazonaws.com/digitaltrends-uploads-prod/2016/10/MacBook-Pro-2016_001.jpg',
            'title'=>'Macbook Pro 2017',
            'description'=>'Macbook Pro Retina 15 2017',
            'price'=> 2000

        ]);

        $product->save();

        $product = new \App\Product([

            'imagePath'=>'https://s3.amazonaws.com/digitaltrends-uploads-prod/2016/10/MacBook-Pro-2016_001.jpg',
            'title'=>'Macbook Pro 2017',
            'description'=>'Macbook Pro Retina 15 2017',
            'price'=> 2000

        ]);

        $product->save();

    }
}
