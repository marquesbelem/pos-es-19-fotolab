<?php

namespace Database\Seeders;

use App\Models\Imagem;
use App\Models\TipoPerfil;
use App\Models\Usuario;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Http\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CreateTestUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function () {
            $tipoPerfil = TipoPerfil::whereTipoPerfil('Fotografo')->first();
            $dataNascimento = Carbon::createFromFormat('d/m/Y', '21/03/1995')
                ->toDateString();

            $testUsersData = [
                'nome' => 'Alan',
                'sobrenome' => 'Santana',
                'email' => 'alan@linduxo.com.br',
                'password' => Hash::make('123'),
                'data_nascimento' => $dataNascimento,
                'id_tipo_perfil' => $tipoPerfil->id,
            ];
    
            $testUser = Usuario::firstOrCreate($testUsersData);

            dump("Usuário de teste: $testUser->nome; criado com sucesso!");
            
            $image = new File(public_path('imgs/foto.jpg'));

            // Coloque a imagem dentro do storage/app deste projeto com os dados abaixo
            $imageData = [
                'disk' => 'local',
                'caminho' => $image->path(),
                'id_usuario' => $testUser->id
            ];
            $image = Imagem::firstOrCreate($imageData);
            dump("Imagem salva com sucesso!");
            if (!$image) {
                throw new Exception('Erro ao inserir imagem!');
            }
            
            $testUser->id_foto_perfil = $image->id;
    
            $testUser->save();
            dump("Foto de perfil salva com sucesso!");
        });
    }
}
