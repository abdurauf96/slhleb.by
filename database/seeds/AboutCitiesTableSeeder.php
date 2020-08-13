<?php

use Illuminate\Database\Seeder;
use App\AboutCity;
class AboutCitiesTableSeeder extends Seeder
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
                'title_ru'=>'История города Слуцк',
                'body_ru'=>'Вы, конечно, слышали о девочке, которая наступила на хлеб, чтобы не запачкать башмачков, слышали и о том, как плохо ей потом пришлось. Об этом и написано, и напечатано.',
                'key'=>'history'

            ],
            [
                'title_ru'=>'История города Слуцк',
                'body_ru'=>'Вы, конечно, слышали о девочке, которая наступила на хлеб, чтобы не запачкать башмачков, слышали и о том, как плохо ей потом пришлось. Об этом и написано, и напечатано.',
                'key'=>'history'

            ]
        ])->each(function($data){
            AboutCity::create($data);
        });
    }
}
