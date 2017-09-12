<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

	private $tableNames = ['characters', 'chapters'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->cleanTables();
        $this->call(CharacterTableSeeder::class);
        $this->call(ChapterTableSeeder::class);
    }

    private function cleanTables()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        
        foreach($this->tableNames as $table) {
             DB::table($table)->truncate();
        }
       
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
