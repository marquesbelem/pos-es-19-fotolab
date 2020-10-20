<?php

use App\Models\Imagem;
use App\Models\Usuario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterUserTableAddImageForeigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(Usuario::TABLE_NAME, function (Blueprint $table) {
            $table->foreign('id_foto_capa')->references('id')->on(Imagem::TABLE_NAME);
            $table->foreign('id_foto_perfil')->references('id')->on(Imagem::TABLE_NAME);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table(Usuario::TABLE_NAME, function (Blueprint $table) {
            $table->dropForeign('id_foto_capa');
            $table->dropForeign('id_foto_perfil');
        });
    }
}
