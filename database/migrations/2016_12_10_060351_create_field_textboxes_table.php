<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldTextboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_textboxes', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('field_id')
				->index();
			$table->unsignedInteger('entry_id')
				->index();
			$table->string('textbox');
            $table->timestamps();

			$table->foreign('field_id')
				->references('id')
				->on('fields');
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
        Schema::dropIfExists('field_textboxes');
    }
}
