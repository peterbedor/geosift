<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('collection_id')
				->index();
			$table->unsignedInteger('country_id')
				->index();
			$table->unsignedInteger('status_id')
				->index();
			$table->string('name');
			$table->string('slug');
			$table->string('street_1');
			$table->string('street_2');
			$table->string('municipality');
			$table->string('territory');
			$table->string('sub_territory');
			$table->string('postal_code');
            $table->timestamps();

			$table->foreign('country_id')
				->references('id')
				->on('countries');
			$table->foreign('status_id')
				->references('id')
				->on('statuses');
			$table->foreign('collection_id')
				->references('id')
				->on('collections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
