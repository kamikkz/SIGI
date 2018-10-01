<?php

use Illuminate\Database\Seeder;

class SeverityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('severities')->insert([
            'name'=>'Critico',
            'created_at'=>now()
        ]);

        DB::table('severities')->insert([
            'name'=>'Grave',
            'created_at'=>now()
        ]);

        DB::table('severities')->insert([
            'name'=>'Moderado',
            'created_at'=>now()
        ]);

        DB::table('severities')->insert([
            'name'=>'Menor',
            'created_at'=>now()
        ]);
    }
}
