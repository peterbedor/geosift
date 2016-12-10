<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_links', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('field_id')
				->index();
			$table->unsignedInteger('entry_id')
				->index();
			$table->string('link');
            $table->timestamps();

			$table->foreign('entry_id')
				->references('id')
				->on('entries');
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
        Schema::dropIfExists('field_links');
    }
}
