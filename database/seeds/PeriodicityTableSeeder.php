<?php

use Illuminate\Database\Seeder;

class PeriodicityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodicities')->insert([
            'name'=>'Diario',
            'created_at'=>now()
        ]);
        DB::table('periodicities')->insert([
            'name'=>'Semanal',
            'created_at'=>now()
        ]);
        DB::table('periodicities')->insert([
            'name'=>'Quincenal',
            'created_at'=>now()
        ]);
        DB::table('periodicities')->insert([
            'name'=>'Mensual',
            'created_at'=>now()
        ]);
        DB::table('periodicities')->insert([
            'name'=>'Bimestral',
            'created_at'=>now()
        ]);
        DB::table('periodicities')->insert([
            'name'=>'Trimestral',
            'created_at'=>now()
        ]);
        DB::table('periodicities')->insert([
            'name'=>'Semestral',
            'created_at'=>now()
        ]);
        DB::table('periodicities')->insert([
            'name'=>'Anual',
            'created_at'=>now()
        ]);
    }
}
