<?php

use Illuminate\Database\Seeder;

class TpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Software Development Section 1
        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-1-1-h1',
          'body' => 'Software Development'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-1-1-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
        ]);

        //Software Development Section 2
        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-1-h1',
          'body' => 'Customized Software'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-2-h1',
          'body' => 'Specialized Software'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-2-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-2-li-1',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-2-li-2',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-2-li-3',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-2-li-4',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-2-img',
          'body' => 'img/placeholders/placeholder-2.jpg'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-3-img',
          'body' => 'img/placeholders/placeholder-0.jpg'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-3-h1',
          'body' => 'Wide Range Of Softwares'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-3-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-3-li-1',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-3-li-2',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-3-li-3',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-2-3-li-4',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        //Software Maintenance Section 3
        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-1-img',
          'body' => 'img/placeholders/placeholder-0.jpg'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-1-h1',
          'body' => 'Software Maintenance'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-2-h1',
          'body' => 'Quick and Easy Software Installations'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-2-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-2-li-1',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-2-li-2',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-2-li-3',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-2-li-4',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-3-h1',
          'body' => 'The Latest Software Upgrades'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-3-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-3-li-1',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-3-li-2',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-3-li-3',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-3-li-4',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-3-3-img',
          'body' => 'img/placeholders/placeholder-1.jpg'
        ]);

        //Software Section 4

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-4-1-h1',
          'body' => 'Diverse Software Solutions'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-4-1-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-4-1-li-1',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-4-1-li-2',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-4-1-li-3',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

        DB::table('contents')->insert([
          'pages_id' => '5',
          'section' => '5-4-1-li-4',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]);

    }
}
