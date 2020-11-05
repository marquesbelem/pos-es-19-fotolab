<?php

namespace Database\Seeders;

use App\Models\TipoPerfil;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Throwable;

class CreateProfileTypes extends Seeder
{
    public function run()
    {
        $profileTypes = [
            [
                'id' => 1,
                'tipo_perfil' => 'Cliente'
            ],
            [
                'id' => 2,
                'tipo_perfil' => 'Fotografo'
            ]
        ];

        try {
            DB::beginTransaction();
            foreach ($profileTypes as $type) {
                $model = TipoPerfil::firstOrCreate($type);
    
                if ($model->wasRecentlyCreated) {
                    dump("Tipo: $model->tipo_perfil; foi criado com sucesso!");
                }
            }
            DB::commit();
        } catch (Throwable $t) {
            DB::rollback();
            throw $t;
        }
    }
}
