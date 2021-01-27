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
                'nome' => 'Cliente'
            ],
            [
                'id' => 2,
                'nome' => 'Fotografo'
            ]
        ];

        try {
            DB::beginTransaction();
            foreach ($profileTypes as $type) {
                $model = TipoPerfil::firstOrCreate($type);
    
                if ($model->wasRecentlyCreated) {
                    dump("Tipo: $model->nome; foi criado com sucesso!");
                }
            }
            DB::commit();
        } catch (Throwable $t) {
            DB::rollback();
            throw $t;
        }
    }
}
