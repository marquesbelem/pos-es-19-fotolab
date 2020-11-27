<?php

namespace App\Http\Controllers;

use App\Models\Fotografo;
use App\Models\TipoPerfil;

class FotografoController extends Controller
{
    public function perfil($id)
    {
        $fotografo = Fotografo::whereId($id)
            ->whereIdTipoPerfil(TipoPerfil::whereTipoPerfil('Fotografo')->first()->id)
            ->with([
                'fotoPerfil',
                'fotoCapa'
            ])
            ->first();

        if (!$fotografo) {
            abort(404, "Fotografo não encontrado!");
        }

        return view('fotografo.perfil', [
            'fotografo' => $fotografo
        ]);
    }
}
