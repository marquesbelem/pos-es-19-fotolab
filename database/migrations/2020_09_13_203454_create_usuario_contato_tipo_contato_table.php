<?php

use App\Models\Contato as ContatoModel;
use App\Models\Endereco;
use App\Models\TipoContato as TipoContatoModel;
use App\Models\Usuario as UsuarioModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioContatoTipoContatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(TipoContatoModel::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('formato_padrao');
            $table->timestamps();
        });

        Schema::create(ContatoModel::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string('dado');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_tipo');
            $table->timestamps();
        });

        Schema::table(ContatoModel::TABLE_NAME, function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on(UsuarioModel::TABLE_NAME);
            $table->foreign('id_tipo')->references('id')->on(TipoContatoModel::TABLE_NAME);
        });

        Schema::create(Endereco::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::table(ContatoModel::TABLE_NAME, function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on(UsuarioModel::TABLE_NAME);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco');
        Schema::dropIfExists('tipo_contato');
        Schema::dropIfExists('contatos');
    }
}
