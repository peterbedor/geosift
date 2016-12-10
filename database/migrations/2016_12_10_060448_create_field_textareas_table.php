<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldTextareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_textareas', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('field_id')
				->index();
			$table->unsignedInteger('entry_id')
				->index();
			$table->text('textarea');
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
        Schema::dropIfExists('field_textareas');
    }
}
