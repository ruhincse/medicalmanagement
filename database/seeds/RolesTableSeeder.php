<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        		"name"=>'Admin'

        ]);


         DB::table('roles')->insert([
        		"name"=>'Doctor'

        ]);

         DB::table('roles')->insert([
        		"name"=>'Labassistant'

        ]);


         DB::table('roles')->insert([
        		"name"=>'Receptionist'

        ]);


           DB::table('roles')->insert([
        		"name"=>'Employeeer'

        ]);


    }
}
