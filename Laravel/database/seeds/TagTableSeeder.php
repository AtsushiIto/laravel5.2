<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
        	[
        		'name' => 'cafe',
        		'description' => 'cafe description', 
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
        		'name' => 'dining',
        		'description' => 'dining description',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        	[
        		'name' => 'recipe',
        		'description' => 'recipe description',
        		'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        	],
        ]);
    }
}
