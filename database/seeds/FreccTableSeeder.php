<?php

use Illuminate\Database\Seeder;

class FreccTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('freccs')->insert([
            'name'=>'Muy Alta',
            'created_at'=>now()
        ]);

        DB::table('freccs')->insert([
            'name'=>'Alta',
            'created_at'=>now()
        ]);

        DB::table('freccs')->insert([
            'name'=>'Media',
            'created_at'=>now()
        ]);

        DB::table('freccs')->insert([
            'name'=>'Baja',
            'created_at'=>now()
        ]);

        DB::table('freccs')->insert([
            'name'=>'Muy Baja',
            'created_at'=>now()
        ]);
    }
}
