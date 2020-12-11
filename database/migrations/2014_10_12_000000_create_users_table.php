<?php

use App\Models\Imagem;
use App\Models\TipoPerfil;
use App\Models\Usuario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Usuario::TABLE_NAME, function (Blueprint $table) {
            $table->id();

            $table->unsignedTinyInteger('id_tipo_perfil');
            $table->string('url_foto_perfil')->nullable();
            $table->string('url_foto_capa')->nullable();

            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->boolean('bloqueado')->default(false);
            $table->string('descricao')->nullable();

            $table->date('data_nascimento');

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
