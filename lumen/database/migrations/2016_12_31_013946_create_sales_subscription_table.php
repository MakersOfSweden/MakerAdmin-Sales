<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesSubscriptionTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("sales_subscription", function (Blueprint $table)
		{
			$table->increments("sales_subscription_id");
			$table->string("title");
//			$table->text("description")->nullable();

			$table->dateTimeTz("date_start");
			$table->integer("product_id"); // foreign key

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
		Schema::drop("sales_subscription");
	}
}
