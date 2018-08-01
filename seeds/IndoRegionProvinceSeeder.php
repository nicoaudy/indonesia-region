<?php

use Illuminate\Database\Seeder;

class IndoRegionProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @deprecated
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/data/provinces.txt'));
        $provinces = unserialize($file);
        DB::table('provinces')->insert($provinces);
    }
}
