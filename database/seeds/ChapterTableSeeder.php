<?php

use App\Models\Chapter;
use Illuminate\Database\Seeder;

class ChapterTableSeeder extends Seeder
{
	private $chapters = [
		'Life Is Bittersweet',
		'Rambunctious Ruffians',
		'Feral The Friendly Companion',
		'Lessons In Life',
		'Obedience Makes The Heart Fonder',
		'The Circus Has Come To Town',
		'The Tears Of A Clown',
		'A Wise Old Elephant',
		'A Sweet Treat For Giovanni',
        'Fancy Hat for Cupcake',
        'Introducing Gelato the Clown'
	];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach($this->chapters as $key => $title) {
    		factory(Chapter::class)->create([
    			'title' => $title,
    			'image_url' => 'chapters/Chapter'. ($key+1) .'.jpg'
    			]);
    	}
        
    }
}
