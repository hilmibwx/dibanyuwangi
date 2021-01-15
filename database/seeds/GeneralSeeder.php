<?php

use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generals')->insert([
            'title' => 'Di Banyuwangi | Visitors Guide Book Banyuwangi',
            'favicon' => 'TA',
            'name' => '#dibanyuwangi',
            'address1' => 'Kab. Banyuwangi',
            'phone' => '0927273333',
            'email' => 'info@dibanyuwangi.cyou',
            'footer' => '#diBanyuwangi',
            'keyword' => 'di banyuwangi',
            'meta_desc' => 'informasi di banyuwangi'
        ]);
    }
}
