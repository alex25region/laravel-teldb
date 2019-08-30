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

        $this->call(TUserTableSeeders::class);
        //factory(TUsers::class, 30)->create();
        //factory(TPosts::class, 9)->create();
        //factory(TOtdels::class, 20)->create();
    }
}
