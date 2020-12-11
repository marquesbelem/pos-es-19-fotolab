<?php

use App\Models\Imagem as ImagemModel;
use App\Models\Usuario;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ImagemModel::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->string('disk');
            $table->string('nome_arquivo');
            $table->timestamps();
        });

        Schema::table(ImagemModel::TABLE_NAME, function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on(Usuario::TABLE_NAME);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(ImagemModel::TABLE_NAME);

    }
}
