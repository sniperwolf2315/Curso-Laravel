<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $rol=[
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach($rol as $key => $value){
            DB::table('rol')->insert([
                'nombre' => $value,
                'created_at'=> Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
        
        //
    }
}
