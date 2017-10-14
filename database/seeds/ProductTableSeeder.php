<?php

use App\Models\Store\Attribute;
use App\Models\Store\AttributeValue;
use App\Models\Store\Product;
use App\Models\Store\ProductImages;
use App\Models\Store\Variant;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

	protected $sizes = ['Small', 'Medium', 'Large', 'XLarge', '2XLarge'];
	protected $urls = [
		['tshirt-white-logo-front.jpg', 'tshirt-white-logo-back.jpg'], 
		['tshirt-red.jpg'], 
		['tshirt-white.jpg'],
		['tshirt-blue.jpg']

	];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach($this->urls as $url) {
    		$product = factory(Product::class)->create(
	       		[ 
	       			'image_url' => $url[0]
	       		]
	       	);

    		$attribute = factory(Attribute::class)->create(
	        	[
	        		'product_id' => $product->id
	        	]
	        );

	        foreach ($url as $link) {
	        	ProductImages::create([
	        		'product_id' => $product->id,
	        		'image_url' => $link
	        	]);
	        }

	       foreach ($this->sizes as $size) {
	 			$variant = factory(Variant::class)->create([
	 				'product_id' => $product->id,
	 				'title' => $product->title,
	 				'attribute_1' => $size
	       		]);

	       		$attirbuteValue = factory(AttributeValue::class)->create([
	       			'attribute_id' => $attribute->id,
	       			'name' => $variant->attribute_1
	       		]);
	        }

    	}
       
    }
}
