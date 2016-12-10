<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('account_id')
				->index();
			$table->unsignedInteger('collection_id')
				->index();
			$table->string('title');
			$table->string('slug');
			$table->text('description');
            $table->timestamps();

			$table->foreign('account_id')
				->references('id')
				->on('accounts');
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
        Schema::dropIfExists('widgets');
    }
}
