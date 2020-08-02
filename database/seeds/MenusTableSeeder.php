<?php

use Illuminate\Database\Seeder;
use App\Menu;
class MenusTableSeeder extends Seeder
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
                'parent_id'=>null,
                'title_ru'=>'Компания',
                'title_by'=>'Компания',
                'title_en'=>'Company',
                'url'=>'/page/company',
            ],
            [
                'parent_id'=>null,
                'title_ru'=>'Сотрудничество',
                'title_by'=>'Сотрудничество',
                'title_en'=>'Cooperation',
                'url'=>'/page/cooperation',
            ],
            [
                'parent_id'=>null,
                'title_ru'=>'Это интересно',
                'title_by'=>'Это интересно',
                'title_en'=>'It is interesting',
                'url'=>'/page/interesting',
            ],
            [
                'parent_id'=>null,
                'title_ru'=>'Контакты',
                'title_by'=>'Контакты',
                'title_en'=>'Contacts',
                'url'=>'/page/contact',
            ],
            [
                'parent_id'=>1,
                'title_ru'=>'Компания сегодня',
                'title_by'=>'Компания сегодня',
                'title_en'=>'Company Today',
                'url'=>'/page/company-today',
            ],
            [
                'parent_id'=>1,
                'title_ru'=>'История ',
                'title_by'=>'История ',
                'title_en'=>'History',
                'url'=>'/page/company-history',
            ],
            [
                'parent_id'=>1,
                'title_ru'=>'Новости и достижения ',
                'title_by'=>'Новости и достижения ',
                'title_en'=>'News and achievements',
                'url'=>'/page/company-news',
            ],
            [
                'parent_id'=>1,
                'title_ru'=>'Информация о деятельности общества ',
                'title_by'=>'Информация о деятельности общества ',
                'title_en'=>'Information about the activities of the company',
                'url'=>'/page/company-activities',
            ],
            [
                'parent_id'=>3,
                'title_ru'=>'Рецепты ',
                'title_by'=>'Рецепты ',
                'title_en'=>'Recipes',
                'url'=>'/page/recipes',
            ],
            [
                'parent_id'=>3,
                'title_ru'=>'Истории',
                'title_by'=>'Истории',
                'title_en'=>'Histories',
                'url'=>'/page/stories',
            ],
            [
                'parent_id'=>3,
                'title_ru'=>'О городе Слуцк ',
                'title_by'=>'О городе Слуцк ',
                'title_en'=>'About the city of Slutsk',
                'url'=>'/page/about-city',
            ],
            [
                'parent_id'=>3,
                'title_ru'=>'Сценарии праздников ',
                'title_by'=>'Сценарии праздников ',
                'title_en'=>'Holidays scenarios',
                'url'=>'/page/holiday-scripts',
            ],
            [
                'parent_id'=>3,
                'title_ru'=>'Акции и конкурсы',
                'title_by'=>'Акции и конкурсы ',
                'title_en'=>'Promotions and contests',
                'url'=>'/page/stock-competitions',
            ],
            [
                'parent_id'=>4,
                'title_ru'=>'Контактные данные ',
                'title_by'=>'Контактные данные ',
                'title_en'=>'Contact details',
                'url'=>'/page/contact',
            ],
            [
                'parent_id'=>4,
                'title_ru'=>'Обратная связь ',
                'title_by'=>'Обратная связь ',
                'title_en'=>'Feedback',
                'url'=>'/page/feedback',
            ],
            [
                'parent_id'=>4,
                'title_ru'=>'Реквизиты ',
                'title_by'=>'Реквизиты ',
                'title_en'=>'Requisites',
                'url'=>'/page/requisites',
            ],
            [
                'parent_id'=>4,
                'title_ru'=>'Схема проезда ',
                'title_by'=>'Схема проезда ',
                'title_en'=>'Driving directions',
                'url'=>'/page/schema',
            ],
            [
                'parent_id'=>4,
                'title_ru'=>'Фирменная торговля ',
                'title_by'=>'Фирменная торговля ',
                'title_en'=>'Brand trade',
                'url'=>'/page/stores',
            ],
            [
                'parent_id'=>4,
                'title_ru'=>'Электронное обращения ',
                'title_by'=>'Электронное обращения ',
                'title_en'=>'Electronic appeal',
                'url'=>'/page/appeals',
            ],
        ])->each(function($data){
            Menu::create([
                'parent_id'=>$data['parent_id'],
                'title_ru'=>$data['title_ru'],
                'title_by'=>$data['title_by'],
                'title_en'=>$data['title_en'],
                'url'=>$data['url'],
            ]);
        });
    }
}
