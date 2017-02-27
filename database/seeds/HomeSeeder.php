<?php

use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //Home Page Seeds
        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '1-img-cover',
            'body' => 'img/placeholders/placeholder-1.jpg'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '1-img-company',
            'body' => 'Bingtek'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '1-img-motto',
            'body' => 'Dedicated To Better Technology'
        ));

        //Section 2 Home
        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '2-1-h1-intro',
            'body' => 'Short Intro to BINGTEK'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '2-1-p-body',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '2-1-btn-link',
            'body' => "about"
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '2-2-ul-li-1',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '2-2-ul-li-2',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '2-2-ul-li-3',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '2-2-ul-li-4',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        //Section 3 Home
        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-1-h1',
            'body' => 'Our Internet Services'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-1-img',
            'body' => 'img/placeholders/placeholder-2.jpg'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-1-p',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-1-li-1',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-1-li-2',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-1-li-3',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-1-li-4',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-1-btn-link',
            'body' => "first_ps"
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-2-h1',
            'body' => "Diversified Networks"
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-2-li-1',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-2-li-2',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-2-li-3',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-2-li-4',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-2-p',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-2-img',
            'body' => 'img/placeholders/placeholder-0.jpg'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '3-2-btn-link',
            'body' => "second_ps"
        ));

        //Section 4 Home
        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-img-1',
            'body' => 'img/placeholders/placeholder-1.jpg'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-1-img1-h1',
            'body' => 'Software Development Services'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-1-img1-li-1',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-1-img1-li-2',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-1-img1-li-3',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-1-img1-li-4',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-1-link',
            'body' => "third_ps"
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-img-2',
            'body' => 'img/placeholders/placeholder-2.jpg'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-2-img2-h1',
            'body' => 'Software Development Services'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-2-img2-li-1',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-2-img2-li-2',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-2-img2-li-3',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-2-img2-li-4',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '4-2-link',
            'body' => "third_ps"
        ));

        //Section 5 Home
        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-1-h1',
            'body' => 'Office Furnishing'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-1-h2',
            'body' => 'Small Office Partitioning and Furnishing'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-1-li-1',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-1-li-2',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-1-li-3',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-1-li-4',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-2-img',
            'body' => 'img/placeholders/placeholder-0.jpg'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-3-h1',
            'body' => 'Office Building Tag Line'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-3-p',
            'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
        ));

        DB::table('contents')->insert(array(
            'pages_id' => '1',
            'section' => '5-3-link',
            'body' => "fourth_ps"
        ));
    }

}
