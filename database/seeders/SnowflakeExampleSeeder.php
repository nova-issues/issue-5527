<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SnowflakeExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("snowflake_examples")->insert([
            'id' => '171392036660976477',
            'snowflake_id' => '171392036660976477',
        ]);
        DB::table("snowflake_examples")->insert([
            'id' => '171392035968915027',
            'snowflake_id' => '171392035968915027',
        ]);
        DB::table("snowflake_examples")->insert([
            'id' => '171392035218135553',
            'snowflake_id' => '171392035218135553',
        ]);
    }
}
