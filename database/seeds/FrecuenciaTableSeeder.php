<?php

use Illuminate\Database\Seeder;

class FrecuenciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frecuencias')->insert([
            'name'=>'Muy Alta',
            'created_at'=>now()
        ]);

        DB::table('frecuencias')->insert([
            'name'=>'Alta',
            'created_at'=>now()
        ]);

        DB::table('frecuencias')->insert([
            'name'=>'Media',
            'created_at'=>now()
        ]);

        DB::table('frecuencias')->insert([
            'name'=>'Baja',
            'created_at'=>now()
        ]);

        DB::table('frecuencias')->insert([
            'name'=>'Muy Baja',
            'created_at'=>now()
        ]);
    }
}
