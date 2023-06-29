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
        Schema::create('categoria', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->timestamps();
        });

        if(Schema::hasTable('usuario')){
            Schema::disableForeignKeyConstraints();

            Schema::table('usuario', function (Blueprint $table) {
                $table->foreignId('categoria_id')
                ->nullable()
                ->default(null)
                ->constrained('categoria');
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
        Schema::dropIfExists('categoria');
    }
};
