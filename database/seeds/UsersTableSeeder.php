<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
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
		   
		                'name'           => 'Admin',
		                'email'          => 'admin@admin.com',
		                'password'       => bcrypt('password'),
		                'remember_token' => null,
		        	],
		        	[
		        		
		                'name'           => 'User',
		                'email'          => 'user@user.com',
		                'password'       => bcrypt('password'),
		                'remember_token' => null, 
		            ]

        	])->each(function($user){
        		
        		User::create([
        			'name'=>$user['name'],
        			'email'=>$user['email'],
        			'password'=>$user['password'],
        		]);
        	});
    }
}
