<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosenWaliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<12;$i++){
            DB::table('dosenwali')->insert([
                'nama' => $faker->name
            ]);
        }        
    }
}
