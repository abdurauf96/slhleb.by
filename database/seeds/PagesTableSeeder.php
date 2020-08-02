<?php

use Illuminate\Database\Seeder;
use App\Page;
class PagesTableSeeder extends Seeder
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
                
                'title_ru'=>'Компания',
                'title_by'=>'Компания',
                'title_en'=>'Company',
                'key'=>'page/company',
            ],
            [
                
                'title_ru'=>'Сотрудничество',
                'title_by'=>'Сотрудничество',
                'title_en'=>'Cooperation',
                'key'=>'#',
            ],
            [
                
                'title_ru'=>'Это интересно',
                'title_by'=>'Это интересно',
                'title_en'=>'It is interesting',
                'key'=>'page/interesting',
            ],
           
            [
                
                'title_ru'=>'Компания сегодня',
                'title_by'=>'Компания сегодня',
                'title_en'=>'Company Today',
                'key'=>'page/company-today',
            ],
            [
                
                'title_ru'=>'История ',
                'title_by'=>'История ',
                'title_en'=>'History',
                'key'=>'page/company-history',
            ],
            [
                
                'title_ru'=>'Новости и достижения ',
                'title_by'=>'Новости и достижения ',
                'title_en'=>'News and achievements',
                'key'=>'page/company-news',
            ],
            [
                
                'title_ru'=>'Информация о деятельности общества ',
                'title_by'=>'Информация о деятельности общества ',
                'title_en'=>'Information about the activities of the company',
                'key'=>'page/company-activities',
            ],
            [
               
                'title_ru'=>'Рецепты ',
                'title_by'=>'Рецепты ',
                'title_en'=>'Recipes',
                'key'=>'page/recipes',
            ],
            [
               
                'title_ru'=>'Истории',
                'title_by'=>'Истории',
                'title_en'=>'Histories',
                'key'=>'page/stories',
            ],
            [
               
                'title_ru'=>'О городе Слуцк ',
                'title_by'=>'О городе Слуцк ',
                'title_en'=>'About the city of Slutsk',
                'key'=>'page/about-city',
            ],
            [
               
                'title_ru'=>'Сценарии праздников ',
                'title_by'=>'Сценарии праздников ',
                'title_en'=>'Holidays scenarios',
                'key'=>'page/holiday-scripts',
            ],
            [
               
                'title_ru'=>'Акции и конкурсы',
                'title_by'=>'Акции и конкурсы ',
                'title_en'=>'Promotions and contests',
                'key'=>'page/stock-competitions',
            ],
            [
                
                'title_ru'=>'Обратная связь ',
                'title_by'=>'Обратная связь ',
                'title_en'=>'Feedback',
                'key'=>'page/feedback',
            ],
            
            [
                
                'title_ru'=>'Фирменная торговля ',
                'title_by'=>'Фирменная торговля ',
                'title_en'=>'Brand trade',
                'key'=>'page/stores',
            ],
            [
                
                'title_ru'=>'Электронное обращения ',
                'title_by'=>'Электронное обращения ',
                'title_en'=>'Electronic appeal',
                'key'=>'page/appeals',
            ],
            [
                
                'title_ru'=>'Политика конфиденциальности ',
                'title_by'=>'Политика конфиденциальности ',
                'title_en'=>'Privacy Policy',
                'key'=>'page/privacy-policy',
            ],
        ])->each(function($data){
            Page::create([
                
                'title_ru'=>$data['title_ru'],
                'title_by'=>$data['title_by'],
                'title_en'=>$data['title_en'],
                'key'=>$data['key'],
            ]);
        });
    }
}
