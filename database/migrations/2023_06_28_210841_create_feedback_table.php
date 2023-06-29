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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->float('nota');
            $table->string('avaliacao',200);
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();
        
        if(Schema::hasTable('users')){
            Schema::table('feedback', function (Blueprint $table) {
                $table->foreignId('users_id')->constrained('users')->default(null);
            });
        }
        if(Schema::hasTable('local')){
            Schema::table('feedback', function (Blueprint $table) {
                $table->foreignId('local_id')->constrained('local')->default(null);
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
        Schema::dropIfExists('feedback');
    }
};
