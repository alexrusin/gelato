<?php

use App\Models\Store\Attribute;
use App\Models\Store\AttributeValue;
use App\Models\Store\Product;
use App\Models\Store\Variant;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

	protected $sizes = ['Small', 'Medium', 'Large', 'XLarge', '2XLarge'];
	protected $colors = ['red', 'white', 'blue'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach($this->colors as $color) {
    		$product = factory(Product::class)->create(
	       		[ 
	       			'image_url' => 'images/store/tshirt-'.$color.'.jpg'
	       		]
	       	);

    		$attribute = factory(Attribute::class)->create(
	        	[
	        		'product_id' => $product->id
	        	]
	        );

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
