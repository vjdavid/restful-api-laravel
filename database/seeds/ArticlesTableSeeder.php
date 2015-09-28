<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('articles')->insert([
        'name' => 'Victor David',
        'email' => 'vjdavid621@gmail.com',
        'location' => 'Tijuana B.C. Mexico.',
        'age' => '20',
      ]);
    }
}
