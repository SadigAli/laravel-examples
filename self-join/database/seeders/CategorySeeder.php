<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=>'Telefonlar və Planşetlər'],
            ['name'=>'Saatlar və Qolbaqlar'],
            ['name'=>'Telefonlar və Planşetlər'],
            ['name'=>'Məişət Texnikası'],
        ]);
    }
}
