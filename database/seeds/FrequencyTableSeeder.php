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
            'created_at'=>now()
        ]);

        DB::table('frequencies')->insert([
            'name'=>'Alta',
            'created_at'=>now()
        ]);

        DB::table('frequencies')->insert([
            'name'=>'Media',
            'created_at'=>now()
        ]);

        DB::table('frequencies')->insert([
            'name'=>'Baja',
            'created_at'=>now()
        ]);

        DB::table('frequencies')->insert([
            'name'=>'Muy Baja',
            'created_at'=>now()
        ]);
    }
}
