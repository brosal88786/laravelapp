<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class FruitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
        	'name' => 'apple',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime(),
        ];
        DB::table('fruits')->insert($param);
        $param = [
        	'name' => 'orange',
        	'created_at' => new DateTime(),
        	'updated_at' => new DateTime(),
        ];
        DB::table('fruits')->insert($param);
    }
}
