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
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();
        
        if(Schema::hasTable('feedback')){
            Schema::table('feedback', function (Blueprint $table) {
                $table->foreignId('local_id')
                ->nullable()
                ->default(null)
                ->constrained('local');
                //->cascadeOnDelete()
                //->cascadeOnUpdate();
            });
        }

        Schema::enableForeignKeyConstraints();
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

