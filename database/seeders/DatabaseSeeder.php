<?php

namespace Database\Seeders;

use App\Models\bookCategories;
use App\Models\publishers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersSeeder::class]);
        $this->call([ItemsSeeder::class]);
        $this->call([TransactionsSeeder::class]);
    }
}

