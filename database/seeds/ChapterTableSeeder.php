<?php

use App\Models\Chapter;
use Illuminate\Database\Seeder;

class ChapterTableSeeder extends Seeder
{
	private $chapters = [
		'Life Is Bittersweet',
		'Rumbunctious Ruffians',
		'Feral The Friendly Companion',
		'Lessons In Life',
		'Obedience Makes The Heart Fonder'
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
