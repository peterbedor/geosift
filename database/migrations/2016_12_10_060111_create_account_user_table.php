<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_user', function(Blueprint $table) {
			$table->unsignedInteger('account_id')
				->index();
			$table->unsignedInteger('user_id')
				->index();

			$table->foreign('account_id')
				->references('id')
				->on('accounts');
			$table->foreign('user_id')
				->references('id')
				->on('users');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_user');
    }
}
