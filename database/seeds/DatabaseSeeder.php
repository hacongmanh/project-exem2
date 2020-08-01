<?php

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
        // $this->call(UserSeeder::class);
         $this->call(ArticleSeeder::class);
        $this->call(BreedsSeeder::class);
        $this->call(DogsSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AccountSeeder::class);
        $this->call(TimelineSeeder::class);
        $this->call(CommentsSeeder::class);
        $this->call(ArticleCategorySeeder::class);
    }
}
