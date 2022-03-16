<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\CodigosPostales;

class Catalogo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Codigos = CodigosPostales::all();

        foreach($Codigos as $Codigo) 
        {  
            DB::table('codigos')->insert([
                'Codigo' => $Codigo['codigo'],
                'Asentamiento' => $Codigo['asentamiento'],
                'Tipo_Asenta' => $Codigo['tipo_asenta'],
                'Municipio' => $Codigo['municipio'],
                'Estado' => $Codigo['estado'],
                'Ciudad' => $Codigo['ciudad'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
