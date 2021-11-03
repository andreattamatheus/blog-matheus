<?php

namespace Database\Seeders;

use App\Models\Post;
use Database\Factories\IndexFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();
        $this->call(IndicesSeeder::class);
        $this->call(UsersSeeder::class);

    }
}
