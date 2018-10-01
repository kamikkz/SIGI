<?php

use Illuminate\Database\Seeder;

class LifeCycleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('life_cycle_influences')->insert([
            'name'=>'Generación de materia prima',
            'created_at'=>now()
        ]);
        DB::table('life_cycle_influences')->insert([
            'name'=>'Diseño de materia prima',
            'created_at'=>now()
        ]);
        DB::table('life_cycle_influences')->insert([
            'name'=>'Producción de materia prima',
            'created_at'=>now()
        ]);
        DB::table('life_cycle_influences')->insert([
            'name'=>'Transporte del producto',
            'created_at'=>now()
        ]);
        DB::table('life_cycle_influences')->insert([
            'name'=>'Uso del producto',
            'created_at'=>now()
        ]);
        DB::table('life_cycle_influences')->insert([
            'name'=>'Tratamiento del producto',
            'created_at'=>now()
        ]);
        DB::table('life_cycle_influences')->insert([
            'name'=>'Disposición final',
            'created_at'=>now()
        ]);
    }
}
