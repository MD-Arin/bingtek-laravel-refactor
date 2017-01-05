<?php

use Illuminate\Database\Seeder;

class FooterNavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([[
          'pages_id' => '7',
          'section' => '7-1-1-li-1',
          'body' => 'Mobmasa Kenya'
        ],[
          'pages_id' => '7',
          'section' => '7-1-1-li-2',
          'body' => 'Nkurumah Road'
        ],[
          'pages_id' => '7',
          'section' => '7-1-1-li-3',
          'body' => 'Kaderbhoy Building'
        ],[
          'pages_id' => '7',
          'section' => '7-1-1-li-4',
          'body' => '1st Floor'
        ],[
          'pages_id' => '7',
          'section' => '7-1-1-li-5',
          'body' => '34'
        ],//Social media
        [
          'pages_id' => '7',
          'section' => '7-1-2-i-1',
          'body' => 'http://www.facebook.com/'
        ],[
          'pages_id' => '7',
          'section' => '7-1-2-i-2',
          'body' => 'http://www.twitter.com/'
        ],[
          'pages_id' => '7',
          'section' => '7-2-1-p-1',
          'body' => 'info@bingtek.co.ke'
        ],[
          'pages_id' => '7',
          'section' => '7-2-1-p-2',
          'body' => '+254700000000'
        ],[
          'pages_id' => '7',
          'section' => '7-2-1-p-3',
          'body' => '+254700000000'
        ],//Navbar
        [
          'pages_id' => '8',
          'section' => '8-1-1-li-1',
          'body' => 'First Product or Service'
        ],[
          'pages_id' => '8',
          'section' => '8-1-1-li-2',
          'body' => 'Second Product or Service'
        ],[
          'pages_id' => '8',
          'section' => '8-1-1-li-3',
          'body' => 'Third Produtc or Service'
        ],[
          'pages_id' => '8',
          'section' => '8-1-1-li-4',
          'body' => 'Fourth Product or Service'
        ]]);
    }
}
