<?php

use Illuminate\Database\Seeder;
class FrequencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frecuencies')->insert([
            'name'=>'Muy Alta',

        ]);

        DB::table('frequencies')->insert([
            'name'=>'Alta',

        ]);

        DB::table('frequencies')->insert([
            'name'=>'Media',

        ]);

        DB::table('frequencies')->insert([
            'name'=>'Baja',

        ]);

        DB::table('frequencies')->insert([
            'name'=>'Muy Baja',

        ]);
    }
}
