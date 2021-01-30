<?php

use App\Product;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slugify = new Slugify();
        
        $product = new Product();            
            $product->name = 'Mangue Passion';
            $product->slug = $slugify->slugify($product->name);
            $product->details = 'Nulla augue massa, volutpat nec eros non, interdum lacinia tortor. Integer efficitur dapibus lectus condimentum ultrices. Maecenas sed aliquam mauris. Phasellus id dignissim massa, ut euismod nisi.';
            $product->price = 9;
            $product->description = 'Vivamus ac lorem pellentesque, vehicula purus porttitor, accumsan nunc. Maecenas ipsum metus, eleifend id diam rutrum, laoreet tincidunt elit. Ut eleifend diam eros, quis efficitur nisl tristique vulputate. Cras ut ex euismod, laoreet metus eget, luctus augue. Etiam finibus egestas urna eleifend tincidunt. Quisque convallis hendrerit efficitur. Donec aliquet ornare lobortis. Curabitur pretium quam arcu. Integer eu massa lorem. Praesent tristique ligula risus, in fringilla eros feugiat eget.';
            $product->save();

        $product = new Product();            
            $product->name = 'Mangue Citron';
            $product->slug = $slugify->slugify($product->name);
            $product->details = 'Nulla augue massa, volutpat nec eros non, interdum lacinia tortor. Integer efficitur dapibus lectus condimentum ultrices. Maecenas sed aliquam mauris. Phasellus id dignissim massa, ut euismod nisi.';
            $product->price = 9;
            $product->description = 'Vivamus ac lorem pellentesque, vehicula purus porttitor, accumsan nunc. Maecenas ipsum metus, eleifend id diam rutrum, laoreet tincidunt elit. Ut eleifend diam eros, quis efficitur nisl tristique vulputate. Cras ut ex euismod, laoreet metus eget, luctus augue. Etiam finibus egestas urna eleifend tincidunt. Quisque convallis hendrerit efficitur. Donec aliquet ornare lobortis. Curabitur pretium quam arcu. Integer eu massa lorem. Praesent tristique ligula risus, in fringilla eros feugiat eget.';
            $product->save();

        $product = new Product();            
            $product->name = 'Mangue Coco';
            $product->slug = $slugify->slugify($product->name);
            $product->details = 'Nulla augue massa, volutpat nec eros non, interdum lacinia tortor. Integer efficitur dapibus lectus condimentum ultrices. Maecenas sed aliquam mauris. Phasellus id dignissim massa, ut euismod nisi.';
            $product->price = 9;
            $product->description = 'Vivamus ac lorem pellentesque, vehicula purus porttitor, accumsan nunc. Maecenas ipsum metus, eleifend id diam rutrum, laoreet tincidunt elit. Ut eleifend diam eros, quis efficitur nisl tristique vulputate. Cras ut ex euismod, laoreet metus eget, luctus augue. Etiam finibus egestas urna eleifend tincidunt. Quisque convallis hendrerit efficitur. Donec aliquet ornare lobortis. Curabitur pretium quam arcu. Integer eu massa lorem. Praesent tristique ligula risus, in fringilla eros feugiat eget.';
            $product->save();

        $product = new Product();            
            $product->name = 'Mangue Cassis';
            $product->slug = $slugify->slugify($product->name);
            $product->details = 'Nulla augue massa, volutpat nec eros non, interdum lacinia tortor. Integer efficitur dapibus lectus condimentum ultrices. Maecenas sed aliquam mauris. Phasellus id dignissim massa, ut euismod nisi.';
            $product->price = 9;
            $product->description = 'Vivamus ac lorem pellentesque, vehicula purus porttitor, accumsan nunc. Maecenas ipsum metus, eleifend id diam rutrum, laoreet tincidunt elit. Ut eleifend diam eros, quis efficitur nisl tristique vulputate. Cras ut ex euismod, laoreet metus eget, luctus augue. Etiam finibus egestas urna eleifend tincidunt. Quisque convallis hendrerit efficitur. Donec aliquet ornare lobortis. Curabitur pretium quam arcu. Integer eu massa lorem. Praesent tristique ligula risus, in fringilla eros feugiat eget.';
            $product->save();

        $product = new Product();            
            $product->name = 'Mangue Fraise';
            $product->slug = $slugify->slugify($product->name);
            $product->details = 'Nulla augue massa, volutpat nec eros non, interdum lacinia tortor. Integer efficitur dapibus lectus condimentum ultrices. Maecenas sed aliquam mauris. Phasellus id dignissim massa, ut euismod nisi.';
            $product->price = 9;
            $product->description = 'Vivamus ac lorem pellentesque, vehicula purus porttitor, accumsan nunc. Maecenas ipsum metus, eleifend id diam rutrum, laoreet tincidunt elit. Ut eleifend diam eros, quis efficitur nisl tristique vulputate. Cras ut ex euismod, laoreet metus eget, luctus augue. Etiam finibus egestas urna eleifend tincidunt. Quisque convallis hendrerit efficitur. Donec aliquet ornare lobortis. Curabitur pretium quam arcu. Integer eu massa lorem. Praesent tristique ligula risus, in fringilla eros feugiat eget.';
            $product->save();

        $product = new Product();            
            $product->name = 'Mangue Framboise';
            $product->slug = $slugify->slugify($product->name);
            $product->details = 'Nulla augue massa, volutpat nec eros non, interdum lacinia tortor. Integer efficitur dapibus lectus condimentum ultrices. Maecenas sed aliquam mauris. Phasellus id dignissim massa, ut euismod nisi.';
            $product->price = 9;
            $product->description = 'Vivamus ac lorem pellentesque, vehicula purus porttitor, accumsan nunc. Maecenas ipsum metus, eleifend id diam rutrum, laoreet tincidunt elit. Ut eleifend diam eros, quis efficitur nisl tristique vulputate. Cras ut ex euismod, laoreet metus eget, luctus augue. Etiam finibus egestas urna eleifend tincidunt. Quisque convallis hendrerit efficitur. Donec aliquet ornare lobortis. Curabitur pretium quam arcu. Integer eu massa lorem. Praesent tristique ligula risus, in fringilla eros feugiat eget.';
            $product->save();

        $product = new Product();            
            $product->name = 'Mangue Orange';
            $product->slug = $slugify->slugify($product->name);
            $product->details = 'Nulla augue massa, volutpat nec eros non, interdum lacinia tortor. Integer efficitur dapibus lectus condimentum ultrices. Maecenas sed aliquam mauris. Phasellus id dignissim massa, ut euismod nisi.';
            $product->price = 9;
            $product->description = 'Vivamus ac lorem pellentesque, vehicula purus porttitor, accumsan nunc. Maecenas ipsum metus, eleifend id diam rutrum, laoreet tincidunt elit. Ut eleifend diam eros, quis efficitur nisl tristique vulputate. Cras ut ex euismod, laoreet metus eget, luctus augue. Etiam finibus egestas urna eleifend tincidunt. Quisque convallis hendrerit efficitur. Donec aliquet ornare lobortis. Curabitur pretium quam arcu. Integer eu massa lorem. Praesent tristique ligula risus, in fringilla eros feugiat eget.';
            $product->save();

        $product = new Product();            
            $product->name = 'Mangue Mandarine';
            $product->slug = $slugify->slugify($product->name);
            $product->details = 'Nulla augue massa, volutpat nec eros non, interdum lacinia tortor. Integer efficitur dapibus lectus condimentum ultrices. Maecenas sed aliquam mauris. Phasellus id dignissim massa, ut euismod nisi.';
            $product->price = 9;
            $product->description = 'Vivamus ac lorem pellentesque, vehicula purus porttitor, accumsan nunc. Maecenas ipsum metus, eleifend id diam rutrum, laoreet tincidunt elit. Ut eleifend diam eros, quis efficitur nisl tristique vulputate. Cras ut ex euismod, laoreet metus eget, luctus augue. Etiam finibus egestas urna eleifend tincidunt. Quisque convallis hendrerit efficitur. Donec aliquet ornare lobortis. Curabitur pretium quam arcu. Integer eu massa lorem. Praesent tristique ligula risus, in fringilla eros feugiat eget.';
            $product->save();
        
    }
}
