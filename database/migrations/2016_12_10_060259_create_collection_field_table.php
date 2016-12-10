<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_field', function(Blueprint $table) {
			$table->unsignedInteger('collection_id')
				->index();
			$table->unsignedInteger('field_id')
				->index();

			$table->foreign('collection_id')
				->references('id')
				->on('collections');
			$table->foreign('field_id')
				->references('id')
				->on('fields');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collection_field');
    }
}
