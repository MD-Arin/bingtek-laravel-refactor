<?php

use Illuminate\Database\Seeder;

class SpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //SPS Section 1
        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-1-1-h1',
          'body' => 'Networking'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-1-1-h2',
          'body' => 'Diversified Networking Solutions'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-1-1-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
        ]);

        //SPS Section 2
        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-2-1-img',
          'body' => 'img/placeholders/placeholder-2.jpg'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-2-2-li-1',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-2-2-li-2',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-2-2-li-3',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-2-2-li-4',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        //SPS Section 3
        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-3-1-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
        ]);

        //SPS Section 4
        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-4-1-h1',
          'body' => 'Interdepartmental Networking'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-4-1-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-4-2-img',
          'body' => 'img/placeholders/placeholder-0.jpg'
        ]);

        //SPS Section 5
        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-5-1-h1',
          'body' => 'Office Networking'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-5-1-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-5-2-h1',
          'body' => 'Building Networking'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '4',
          'section' => '4-5-2-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.'
        ]);

    }
}
