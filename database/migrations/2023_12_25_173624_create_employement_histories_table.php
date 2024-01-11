<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateEmployementHistoriesTable extends Migration {

	public function up()
	{
		Schema::create('employement_histories', function(Blueprint $table) {
			$table->increments('id');
			$table->bigInteger('employee_id')->unsigned();
			$table->string('company_name');
			$table->string('designation');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('employement_histories');
	}
}

