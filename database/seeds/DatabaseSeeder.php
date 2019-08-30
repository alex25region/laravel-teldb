<?php

use Illuminate\Database\Seeder;
use App\Models\TPosts;
use App\Models\TOtdels;
use App\Models\TUsers;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(TPosts::class, 10)->create();
        factory(TOtdels::class, 40)->create();
        factory(TUsers::class, 350)->create();
    }
}
