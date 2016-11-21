<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelDetailsTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('price');
            $table->integer('oauth_client_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
            $table->integer('agent_id')->index()->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcel_details');
    }
}
