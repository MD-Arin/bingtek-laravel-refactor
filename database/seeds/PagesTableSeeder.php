<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        DB::table('pages')->insert([
          'page' => 'home'
        ]);

        DB::table('pages')->insert([
          'page' => 'about'
        ]);

        DB::table('pages')->insert([
          'page' => 'fps'
        ]);

        DB::table('pages')->insert([
          'page' => 'sps'
        ]);

        DB::table('pages')->insert([
          'page' => 'tps'
        ]);

        DB::table('pages')->insert([
          'page' => 'frps'
        ]);

        DB::table('pages')->insert([
          'page' => 'footer'
        ]);

        DB::table('pages')->insert([
          'page' => 'nav'
        ]);


    }
}
