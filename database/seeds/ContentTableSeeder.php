<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        //About Page Seeds
        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '1-1-h1',
          'body' => 'Our Story'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '1-1-img',
          'body' => 'img/placeholders/placeholder-1.jpg'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '1-2-h1',
          'body' => "Founder: Founder's Name"
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '1-2-h2',
          'body' => 'Year: Founding Date'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '1-2-h3',
          'body' => 'The Story: '
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '1-2-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-h1',
          'body' => "Where We've Been"
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-1',
          'body' => 'img/placeholders/placeholder-2.jpg'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-1-h1',
          'body' => 'Year: 2005'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-1-h2',
          'body' => 'Accomplishment: Best Networks In Mombasa'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-1-h3',
          'body' => 'The Story: '
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-1-p',
          'body' => 'orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-2',
          'body' => 'img/placeholders/placeholder-2.jpg'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-2-h1',
          'body' => 'Year: 2005'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-2-h2',
          'body' => 'Accomplishment: Best Networks In Mombasa'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-2-h3',
          'body' => 'The Story: '
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '2-1-img-2-p',
          'body' => 'orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-1-img',
          'body' => 'img/placeholders/user-placeholder.png'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-1-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-1-h5-1',
          'body' => 'John Doe'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-1-h5-2',
          'body' => 'Procurement'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-1-h5-3',
          'body' => 'Satisfied ltd'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-2-img',
          'body' => 'img/placeholders/user-placeholder.png'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-2-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-2-h5-1',
          'body' => 'Jane Doe'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-2-h5-2',
          'body' => 'CEO'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-2-h5-3',
          'body' => 'Logistics ltd'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-3-img',
          'body' => 'img/placeholders/user-placeholder.png'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-3-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-3-h5-1',
          'body' => 'John Doe'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-3-h5-2',
          'body' => 'Marketing'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-3-h5-3',
          'body' => 'Designs ltd'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-4-img',
          'body' => 'img/placeholders/user-placeholder.png'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-4-p',
          'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-4-h5-1',
          'body' => 'Jane Doe'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-4-h5-2',
          'body' => 'Sales'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '3-4-h5-3',
          'body' => 'Merchant ltd'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-1-img',
          'body' => 'img/placeholders/placeholder-0.jpg'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-1-img-h1',
          'body' => 'Partner 1'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-2-img',
          'body' => 'img/placeholders/placeholder-1.jpg'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-2-img-h1',
          'body' => 'Partner 2'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-3-img',
          'body' => 'img/placeholders/placeholder-2.jpg'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-3-img-h1',
          'body' => 'Partner 3'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-4-img',
          'body' => 'img/placeholders/placeholder-0.jpg'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-4-img-h1',
          'body' => 'Partner 4'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-5-img',
          'body' => 'img/placeholders/placeholder-1.jpg'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-5-img-h1',
          'body' => 'Partner 5'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-6-img',
          'body' => 'img/placeholders/placeholder-2.jpg'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '4-6-img-h1',
          'body' => 'Partner 6'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '5-1-img',
          'body' => 'img/placeholders/user-placeholder.png'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '5-1-img-h1',
          'body' => 'John Doe'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '5-1-img-h2',
          'body' => 'CEO'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '5-2-img',
          'body' => 'img/placeholders/user-placeholder.png'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '5-2`-img-h1',
          'body' => 'Jane Doe'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '5-2-img-h2',
          'body' => 'CFO'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '5-3-img',
          'body' => 'img/placeholders/user-placeholder.png'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '5-3-img-h1',
          'body' => 'John Doe'
        ));

        DB::table('contents')->insert(array(
          'pages_id' => '2',
          'section' => '5-3-img-h2',
          'body' => 'COO'
        ));

    }
}
