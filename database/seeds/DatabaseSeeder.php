<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        Eloquent::unguard();

        //call our bingtek seeder
        $this->call(PagesTableSeeder::class);
        $this->call(ContentTableSeeder::class);
        $this->command->info('Bingtek Seeds are complete');
    }
}
