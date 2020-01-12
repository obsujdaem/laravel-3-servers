<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servers')->insert([
            ['host' => 'mysql1'],
            ['host' => 'mysql2']
        ]);
    }
}
