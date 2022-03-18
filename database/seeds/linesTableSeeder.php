<?php

use Illuminate\Database\Seeder;

class linesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lines')->insert([
            'main_lines' => Str::random(10),
            'ieaders' => Str::random(10),
        ]);
    }
}
