<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
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
                'id'=>'1',
                'name'=>'admin',
                'label'=>'Adminstrator'
            ],
            [
                'id'=>'2',
                'name'=>'user',
                'label'=>'User'
            ],
        ])->each(function($data){
            Role::create([
                'id'=>$data['id'],
                'name'=>$data['name'],
                'label'=>$data['label'],
            ]);
        });
    }
}
