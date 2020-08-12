<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
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
                    'name'=>'Хлеб «Слуцкий»',
                    'description'=>'Есть такой хлеб, аромат и вкус которого мы помним с детства, он напоминает о воскресном утре и становится дорог для каждой белорусской семьи, о таком хлебе говорят – классический!',
                    'about'=>'мука пшеничная 2 с М12-25, мука ржаная сеяная, вода, солод ржаной сухой, соль поваренная пищевая йодированная (противослеживающая добавка Е 536), дрожжи хлебопекарные прессованные, сахар белый кристаллический.',
                    'consist'=>'мука пшеничная 2 с М12-25, мука ржаная сеяная, вода, солод ржаной сухой, соль поваренная пищевая йодированная (противослеживающая добавка Е 536), дрожжи хлебопекарные прессованные, сахар белый кристаллический.'
                ],

                'by'=>[
                    'name'=>'Хлеб «Слуцкий»',
                    'description'=>'Ёсць такі хлеб, водар і смак якога мы памятаем з дзяцінства, ён нагадвае пра нядзельны раніцу і становіцца дарог для кожнай беларускай сям`і, аб такім хлебе кажуць - класічны!',
                    'about'=>'мука пшанічная 2 з М12-25, мука жытняя сеяная, вада, солад жытняй сухі, соль павараная харчовая ёдаваная (противослеживающая дабаўка Е 536), дрожджы хлебапякарныя прэсаваныя, цукар белы крышталічны.',
                    'consist'=>'мука пшанічная 2 з М12-25, мука жытняя сеяная, вада, солад жытняй сухі, соль павараная харчовая ёдаваная (противослеживающая дабаўка Е 536), дрожджы хлебапякарныя прэсаваныя, цукар белы крышталічны.'
                ],
                'en'=>[
                    'name'=>'Bread "Slutsky"',
                    'description'=>'wheat flour 2 with M12-25, seeded rye flour, water, dry rye malt, iodized table salt (anti-caking additive E 536), pressed baking yeast, white crystalline sugar.',
                    'about'=>'wheat flour 2 with M12-25, seeded rye flour, water, dry rye malt, iodized table salt (anti-caking additive E 536), pressed baking yeast, white crystalline sugar.',
                    'consist'=>'wheat flour 2 with M12-25, seeded rye flour, water, dry rye malt, iodized table salt (anti-caking additive E 536), pressed baking yeast, white crystalline sugar.'
                ],
                'category_id'=>'1',
                'filter_id'=>'1',
                'protein'=>'14',
                'carbo'=>'7',
                'fat'=>'12',
                'callory'=>'195',
                'image'=>'chusovskoy1.png',
                'image_in'=>'chusovskoy.png',
                'image_out'=>'chusovskoy1.png',
                'weight'=>'164',

            ],

            [
                'ru'=>[
                    'name'=>'22 Хлеб «Слуцкий» 22',
                    'description'=>'22 Есть такой хлеб, аромат и вкус которого мы помним с детства, он напоминает о воскресном утре и становится дорог для каждой белорусской семьи, о таком хлебе говорят – классический!',
                    'about'=>' 22 мука пшеничная 2 с М12-25, мука ржаная сеяная, вода, солод ржаной сухой, соль поваренная пищевая йодированная (противослеживающая добавка Е 536), дрожжи хлебопекарные прессованные, сахар белый кристаллический.',
                    'consist'=>'22 мука пшеничная 2 с М12-25, мука ржаная сеяная, вода, солод ржаной сухой, соль поваренная пищевая йодированная (противослеживающая добавка Е 536), дрожжи хлебопекарные прессованные, сахар белый кристаллический.'
                ],

                'by'=>[
                    'name'=>'22 Хлеб «Слуцкий»',
                    'description'=>'22 Ёсць такі хлеб, водар і смак якога мы памятаем з дзяцінства, ён нагадвае пра нядзельны раніцу і становіцца дарог для кожнай беларускай сям`і, аб такім хлебе кажуць - класічны!',
                    'about'=>'22 мука пшанічная 2 з М12-25, мука жытняя сеяная, вада, солад жытняй сухі, соль павараная харчовая ёдаваная (противослеживающая дабаўка Е 536), дрожджы хлебапякарныя прэсаваныя, цукар белы крышталічны.',
                    'consist'=>'22 мука пшанічная 2 з М12-25, мука жытняя сеяная, вада, солад жытняй сухі, соль павараная харчовая ёдаваная (противослеживающая дабаўка Е 536), дрожджы хлебапякарныя прэсаваныя, цукар белы крышталічны.'
                ],
                'en'=>[
                    'name'=>'22 Bread "Slutsky"',
                    'description'=>'22 wheat flour 2 with M12-25, seeded rye flour, water, dry rye malt, iodized table salt (anti-caking additive E 536), pressed baking yeast, white crystalline sugar.',
                    'about'=>'22 wheat flour 2 with M12-25, seeded rye flour, water, dry rye malt, iodized table salt (anti-caking additive E 536), pressed baking yeast, white crystalline sugar.',
                    'consist'=>'22 wheat flour 2 with M12-25, seeded rye flour, water, dry rye malt, iodized table salt (anti-caking additive E 536), pressed baking yeast, white crystalline sugar.'
                ],
                'category_id'=>'2',
                'filter_id'=>'2',
                'protein'=>'24',
                'carbo'=>'17',
                'fat'=>'92',
                'callory'=>'1695',
                'image'=>'chusovskoy1.png',
                'image_in'=>'chusovskoy.png',
                'image_out'=>'chusovskoy1.png',
                'weight'=>'135',

            ],
        ])->each(function($data){
            Product::create($data);
        });
    }
}
