<?php

use Illuminate\Database\Seeder;

class RodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rods')->insert([
            'rod_name' => Str::random(10),
        ]);
    }
}
