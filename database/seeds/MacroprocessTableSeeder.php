<?php

use Illuminate\Database\Seeder;

class MacroprocessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('macroprocesses')->insert([
            'name'=>'Enseñanza Aprendizaje',
            'created_at'=>now()
        ]);

        DB::table('macroprocesses')->insert([
            'name'=>'Investigación e Innovación',
            'created_at'=>now()
        ]);

        DB::table('macroprocesses')->insert([
            'name'=>'Extensión y Cultura',
            'created_at'=>now()
        ]);

        DB::table('macroprocesses')->insert([
            'name'=>'Vinculación',
            'created_at'=>now()
        ]);

        DB::table('macroprocesses')->insert([
            'name'=>'Apoyos y Servicios',
            'created_at'=>now()
        ]);

        DB::table('macroprocesses')->insert([
            'name'=>'Administración y Tecnologías de la Información',
            'created_at'=>now()
        ]);

        DB::table('macroprocesses')->insert([
            'name'=>'Planeación Institucional',
            'created_at'=>now()
        ]);

        DB::table('macroprocesses')->insert([
            'name'=>'Evaluación y Control',
            'created_at'=>now()
        ]);

        DB::table('macroprocesses')->insert([
            'name'=>'Gobierno',
            'created_at'=>now()
        ]);
    }
}
