<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateEmployeesTable extends Migration {

	public function up()
	{
		Schema::create('employees', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('father_name');
			$table->string('mother_name');
			$table->integer('card_no');
			$table->tinyInteger('gender');
			$table->tinyInteger('marital_status');
			$table->date('date_of_birth')->nullable();
			$table->decimal('salary');
			$table->enum('is_ot_enable', array('0', '1'));
			$table->string('present_address');
			$table->string('permanent_address');
			$table->string('photo');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('employees');
	}
}

