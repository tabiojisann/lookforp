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
        $this->call(UserTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(ArticleTableSeeder::class);
        // $this->call(KeepTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(ThemeTableSeeder::class);
        $this->call(AnswerTableSeeder::class);
    }
}
