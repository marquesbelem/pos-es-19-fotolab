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
            $table->unsignedBigInteger('id_foto_perfil')->nullable();
            $table->unsignedBigInteger('id_foto_capa')->nullable();
            
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('bloqueado')->default(false);
            $table->string('descricao')->nullable();
            
            $table->date('data_nascimento');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table(Usuario::TABLE_NAME, function (Blueprint $table) {
            $table->foreign('id_tipo_perfil')->references('id')->on(TipoPerfil::TABLE_NAME);
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
