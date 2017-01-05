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
        $this->call(HomeSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(FpsSeeder::class);
        $this->call(SpsSeeder::class);
        $this->call(TpsSeeder::class);
        $this->call(FrpsSeeder::class);
        $this->call(FooterNavSeeder::class);
        $this->call(DefaultUserSeeder::class);
        $this->command->info('Bingtek Seeds are complete');
    }
}
