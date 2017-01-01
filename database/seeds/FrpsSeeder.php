<?php

use Illuminate\Database\Seeder;

class FrpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
          'pages_id' => '6',
          'section' => '',
          'body' => ''
        ]);
    }
}
