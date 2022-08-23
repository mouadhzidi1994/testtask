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
        Schema::create('_client', function (Blueprint $table) {
            $table->id()->unique();
           
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->string('email',255);
            $table->string('passport_num',255);
            $table->string('gender',10);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_client');
    }
};
