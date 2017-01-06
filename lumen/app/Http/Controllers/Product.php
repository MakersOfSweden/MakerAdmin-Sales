<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\EntityStandardFiltering;

class Product extends Controller
{
	use EntityStandardFiltering;

	/**
	 *
	 */
	public function list(Request $request)
	{
		$params = $request->query->all();
		return $this->_list("Product", $params);
	}

	/**
	 *
	 */
	public function create(Request $request)
	{
		$data = $request->json()->all();
		return $this->_create("Product", $data);
	}

	/**
	 *
	 */
	public function read(Request $request, $product_id)
	{
		return $this->_read("Product", [
			"product_id" => $product_id
		]);
	}

	/**
	 *
	 */
	public function update(Request $request, $product_id)
	{
		$data = $request->json()->all();
		return $this->_update("Product", [
			"product_id" => $product_id
		], $data);
	}

	/**
	 * Delete product
	 */
	public function delete(Request $request, $product_id)
	{
		return $this->_delete("Product", [
			"product_id" => ["=", $product_id]
		]);
	}
}