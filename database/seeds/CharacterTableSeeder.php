<?php

use App\Models\Character;
use Illuminate\Database\Seeder;

class CharacterTableSeeder extends Seeder
{

	private $characters = [
		'Billy Corkin The Bully',
		'Brian Thurston The Bully',
		'Cole Peters Aka Gelato The Clown',
		'Cupcake In Her Fancy Hat',
		'Felicifire The Elephant',
		'Gelato The Clown And Cupcake',
		'Giovanni Pinasco',
		'Giovanni Pinasco As Cavailere The Clown',
		'Madison The Character'
	];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach ($this->characters as $character) {
    		factory(Character::class)->create([
    			'name' => $character,
    			'image_url' => 'characters/'. str_replace(' ', '', $character).'.jpg'
    			]);
    	}
      
    }
}
