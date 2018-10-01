<?php

use Illuminate\Database\Seeder;

class TemporalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temporalities')->insert([
            'name'=>'0 a 1 mes',
            'created_at'=>now()
        ]);
        DB::table('temporalities')->insert([
            'name'=>'1 a 6 meses',
            'created_at'=>now()
        ]);
        DB::table('temporalities')->insert([
            'name'=>'6 a 12 meses',
            'created_at'=>now()
        ]);
        DB::table('temporalities')->insert([
            'name'=>'1 a 3 años',
            'created_at'=>now()
        ]);
        DB::table('temporalities')->insert([
            'name'=>'3 a 5 años',
            'created_at'=>now()
        ]);
        DB::table('temporalities')->insert([
            'name'=>'más de 5 años',
            'created_at'=>now()
        ]);
    }
}
