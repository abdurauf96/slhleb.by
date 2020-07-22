<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
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
					'ru'=>[
						'name'=>'Хлеба',
						'description'=>'Слуцкий хлебозавод - это динамично развивающаяся компания с более чем полувековой историей. Правильное сочетание современных технологий и многовековых традиций с творческим и добросовестным отношением к любимому занятию - вот секрет команды. Продукция, выпускаемая на заводе, под брендом «Слуцкий хлеб» широко известна не только в своем регионе, но и во многих районах Минской области. Наш свежий хлеб всегда приносит дому особую атмосферу уюта и благополучия - для этого и даже за необычный вкус и выбор его покупателей. Сегодня ассортимент хлебобулочных изделий включает около 50 наименований хлебобулочных изделий и столько же кондитерских изделий. Широкий ассортимент продукции, индивидуальный подход к каждому клиенту, Продукция,',
					],
					'en'=>[
						'name'=>'Breads',
						'description'=>'Slutsk Bakery is a dynamically developing company with more than half a century of history. The right combination of modern technology and centuries-old traditions with a creative and conscientious attitude to your favorite pastime is the secret of the team. The products manufactured at the plant under the Slutsk Bread brand are widely known not only in their region, but also in many districts of the Minsk region. Our fresh bread always brings home a special atmosphere of comfort and well-being - for this, and even for the unusual taste and choice of its customers. Today the assortment of bakery products includes about 50 names of bakery products and the same number of confectionery products. A wide range of products, an individual approach to each client, Products,',
					],
					'by'=>[
						'name'=>'Хлеба',
						'description'=>'Слуцкі хлебазавод - гэта дынамічна развіваецца кампанія з больш чым паўвекавой гісторыяй. Правільнае спалучэнне сучасных тэхналогій і шматвяковых традыцый з творчым і добрасумленнымі адносінамі да любімаму занятку - вось сакрэт каманды. Прадукцыя, якая выпускаецца на заводзе, пад брэндам «Слуцкі хлеб» шырока вядомая не толькі ў сваім рэгіёне, але і ў многіх раёнах Мінскай вобласці. Наш свежы хлеб заўсёды прыносіць дому асаблівую атмасферу выгоды і дабрабыту - для гэтага і нават за незвычайны густ і выбар яго пакупнікоў. Сёння асартымент хлебабулачных вырабаў ўключае каля 50 найменняў хлебабулачных вырабаў і столькі ж кандытарскіх вырабаў. Шырокі асартымент прадукцыі, індывідуальны падыход да кожнага кліента, прадукцыя,',
					],
				],
        	

				[
					'ru'=>[
						'name'=>'Булки',
						'description'=>'Слуцкий хлебозавод - это динамично развивающаяся компания с более чем полувековой историей. Правильное сочетание современных технологий и многовековых традиций с творческим и добросовестным отношением к любимому занятию - вот секрет команды. Продукция, выпускаемая на заводе, под брендом «Слуцкий хлеб» широко известна не только в своем регионе, но и во многих районах Минской области. Наш свежий хлеб всегда приносит дому особую атмосферу уюта и благополучия - для этого и даже за необычный вкус и выбор его покупателей. Сегодня ассортимент хлебобулочных изделий включает около 50 наименований хлебобулочных изделий и столько же кондитерских изделий. Широкий ассортимент продукции, индивидуальный подход к каждому клиенту, Продукция,',
					],
					'en'=>[
						'name'=>'Rolls',
						'description'=>'Slutsk Bakery is a dynamically developing company with more than half a century of history. The right combination of modern technology and centuries-old traditions with a creative and conscientious attitude to your favorite pastime is the secret of the team. The products manufactured at the plant under the Slutsk Bread brand are widely known not only in their region, but also in many districts of the Minsk region. Our fresh bread always brings home a special atmosphere of comfort and well-being - for this, and even for the unusual taste and choice of its customers. Today the assortment of bakery products includes about 50 names of bakery products and the same number of confectionery products. A wide range of products, an individual approach to each client, Products,',
					],
					'by'=>[
						'name'=>'булкі',
						'description'=>'Слуцкі хлебазавод - гэта дынамічна развіваецца кампанія з больш чым паўвекавой гісторыяй. Правільнае спалучэнне сучасных тэхналогій і шматвяковых традыцый з творчым і добрасумленнымі адносінамі да любімаму занятку - вось сакрэт каманды. Прадукцыя, якая выпускаецца на заводзе, пад брэндам «Слуцкі хлеб» шырока вядомая не толькі ў сваім рэгіёне, але і ў многіх раёнах Мінскай вобласці. Наш свежы хлеб заўсёды прыносіць дому асаблівую атмасферу выгоды і дабрабыту - для гэтага і нават за незвычайны густ і выбар яго пакупнікоў. Сёння асартымент хлебабулачных вырабаў ўключае каля 50 найменняў хлебабулачных вырабаў і столькі ж кандытарскіх вырабаў. Шырокі асартымент прадукцыі, індывідуальны падыход да кожнага кліента, прадукцыя,',
					],
				],
        	
        ])->each(function($data){
        	Category::create([
        		'ru'=>$data['ru'],
            	'en'=>$data['en'],
            	'by'=>$data['by'],
        		'icon'=>null,
        		'image'=>null,
        	]);
        });
    }
}
