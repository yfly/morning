<?php

use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offers', function($table)
         {
            $table->create();
			$table->increments('id');
			$table->string('name');
			$table->string('brand');
			$table->string('category');
			$table->string('offer_type');
			$table->decimal('o_price', 10, 2);
			$table->decimal('d_price', 10, 2);
			$table->integer('quantity');
			$table->string('offer_status', 100);
			$table->text('description');
			$table->text('address');
			$table->string('phone');
			$table->string('start_date');
			$table->string('end_date');
			$table->string('event_date');
			$table->string('event_time');
			$table->string('image');
			$table->integer('count');
			$table->timestamps();
         });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('offers');
	}

}