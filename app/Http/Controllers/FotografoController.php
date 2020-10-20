<?php

namespace App\Http\Controllers;

use App\Models\Fotografo;

class FotografoController extends Controller
{
    public function perfil($id)
    {
        $fotografo = Fotografo::whereId($id)->first();

        if (!$fotografo) {
            abort(404, "Fotografo não encontrado!");
        }

        return view('fotografo.perfil', [
            'fotografo' => $fotografo
        ]);
    }
}
