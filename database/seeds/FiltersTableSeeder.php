<?php

use Illuminate\Database\Seeder;
use App\Filter;

class FiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
        	[
				'name'=>'Хлеба для нагится',
	        	'category_id'=>'1',
        	],

        	[
				'name'=>'Хлеба ржаные',
	        	'category_id'=>'1',
        	]
        	
        ])->each(function($data){
        	Filter::create([
        		'name'=>$data['name'],
        		'category_id'=>$data['category_id'],
        	]);
        });
    
    }
}
