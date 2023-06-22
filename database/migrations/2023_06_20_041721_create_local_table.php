<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('descricao', 200)->nullable();
            $table->string('telefone', 20);
            $table->string('coordenada', 40);
            $table->string('imagem', 150)->nullable();
            $table->json('acessibilidade')->nullable();
         //   $table->string('acessibilidade', 20); //vetor?
            $table->timestamps();
        });
        /*
        Schema::disableForeignKeyConstraints();

        Schema::create('local_acessibilidade', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->foreignId('local_id')->nullable()->constrained('local')->default(null);
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
        */

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locals');
    }
};
