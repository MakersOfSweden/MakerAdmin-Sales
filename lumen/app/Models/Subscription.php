<?php
namespace App\Models;

use App\Models\Entity;

/**
 *
 */
class Subscription extends Entity
{
	protected $type = "sales_subscription";
	protected $table = "sales_subscription";
	protected $id_column = "subscription_id";
	protected $columns = [
		"subscription_id" => [
			"column" => "sales_subscription.sales_subscription_id",
			"select" => "sales_subscription.sales_subscription_id",
		],
		"created_at" => [
			"column" => "sales_subscription.created_at",
			"select" => "DATE_FORMAT(sales_subscription.created_at, '%Y-%m-%dT%H:%i:%sZ')",
		],
		"updated_at" => [
			"column" => "sales_subscription.updated_at",
			"select" => "DATE_FORMAT(sales_subscription.updated_at, '%Y-%m-%dT%H:%i:%sZ')",
		],
		"title" => [
			"column" => "sales_subscription.title",
			"select" => "sales_subscription.title",
		],
		"product_id" => [
			"column" => "sales_subscription.product_id",
			"select" => "sales_subscription.product_id",
		],
		"date_start" => [
			"column" => "sales_subscription.date_start",
			"select" => "DATE_FORMAT(sales_subscription.date_start, '%Y-%m-%dT%H:%i:%sZ')",
		],
	];
	protected $deletable = true;
	protected $sort = ["title", "asc"];
}