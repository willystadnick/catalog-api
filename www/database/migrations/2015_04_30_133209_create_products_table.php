<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('titulo', 255);
			$table->string('slug', 255);
			$table->decimal('preco', 10, 2);
			$table->string('thumbnail', 255);
			$table->integer('category_id')
				->unsigned()
				->nullable();
			$table->foreign('category_id')
				->references('id')
				->on('categories');
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
		Schema::drop('products');
	}

}
