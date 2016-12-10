<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collection_entry', function(Blueprint $table) {
			$table->unsignedInteger('collection_id')
				->index();
			$table->unsignedInteger('entry_id')
				->index();

			$table->foreign('collection_id')
				->references('id')
				->on('collections');
			$table->foreign('entry_id')
				->references('id')
				->on('entries');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
