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
        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(DirectionsTableSeeder::class);
        $this->call(OrganizationsTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
    }
}
