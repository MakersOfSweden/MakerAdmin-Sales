<?php
namespace App\Models;

use App\Models\Entity;

/**
 *
 */
class Product extends Entity
{
	protected $type = "sales_product";
	protected $table = "sales_product";
	protected $id_column = "product_id";
	protected $columns = [
		"product_id" => [
			"column" => "sales_product.sales_product_id",
			"select" => "sales_product.sales_product_id",
		],
		"created_at" => [
			"column" => "sales_product.created_at",
			"select" => "DATE_FORMAT(sales_product.created_at, '%Y-%m-%dT%H:%i:%sZ')",
		],
		"updated_at" => [
			"column" => "sales_product.updated_at",
			"select" => "DATE_FORMAT(sales_product.updated_at, '%Y-%m-%dT%H:%i:%sZ')",
		],
		"title" => [
			"column" => "sales_product.title",
			"select" => "sales_product.title",
		],
		"description" => [
			"column" => "sales_product.description",
			"select" => "sales_product.description",
		],
		"expiry_date" => [
			"column" => "sales_product.expiry_date",
			"select" => "DATE_FORMAT(sales_product.expiry_date, '%Y-%m-%dT%H:%i:%sZ')",
		],
		"auto_extend" => [
			"column" => "sales_product.auto_extend",
			"select" => "sales_product.auto_extend",
		],
		"price" => [
			"column" => "sales_product.price",
			"select" => "sales_product.price",
		],
		"interval" => [
			"column" => "sales_product.interval",
			"select" => "sales_product.interval",
		],
	];
	protected $deletable = true;
	protected $sort = ["title", "asc"];
}