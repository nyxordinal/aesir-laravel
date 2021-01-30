<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('mains');
        Schema::create('mains', function (Blueprint $table) {
            $table->bigIncrements('ain');
            $table->unsignedBigInteger('user_id');
            $table->string('title', 255)->unique();
            $table->text('genre')->nullable();
            $table->smallInteger('episode')->nullable();
            $table->date('airing_from')->nullable();
            $table->date('airing_until')->nullable();
            $table->tinyInteger('type')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('download_status')->default(0);
            $table->tinyInteger('resolution')->default(0);
            $table->tinyInteger('storage_device')->default(0);
            $table->text('note')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mains');
    }
}
