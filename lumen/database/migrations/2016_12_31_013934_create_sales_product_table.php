<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesProductTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("sales_product", function (Blueprint $table)
		{
			$table->increments("sales_product_id");
			$table->string("title");
			$table->text("description")->nullable();

			$table->dateTimeTz("expiry_date")->nullable();
			$table->string("auto_extend");
			$table->integer("price");
			$table->integer("interval");

			$table->dateTimeTz("created_at")->default(DB::raw("CURRENT_TIMESTAMP"));
			$table->dateTimeTz("updated_at")->nullable();
			$table->dateTimeTz("deleted_at")->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("sales_product");
	}
}
