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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nome',120);
            $table->string('telefone',20);
            $table->string('email',100);
            $table->string('imagem',150)->nullable();
            $table->timestamps();
        });

        if(Schema::hasTable('categoria')){
            Schema::disableForeignKeyConstraints();

            Schema::table('usuario', function (Blueprint $table) {
                $table->foreignId('categoria_id')
                ->nullable()
                ->default(null)
                ->constrained('categoria')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            });
            
            Schema::enableForeignKeyConstraints();
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
