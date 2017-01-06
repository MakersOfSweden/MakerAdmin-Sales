<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\EntityStandardFiltering;

class Sales extends Controller
{
	use EntityStandardFiltering;

	/**
	 *
	 */
	public function list(Request $request)
	{
		return ["data" => []];
//		$params = $request->query->all();
//		return $this->_list("Sales", $params);
	}

	/**
	 *
	 */
	public function create(Request $request)
	{
		return ["data" => []];
//		$data = $request->json()->all();
//		return $this->_create("Sales", $data);
	}

	/**
	 *
	 */
	public function read(Request $request, $sales_id)
	{
		return ["data" => []];
//		return $this->_read("Sales", [
//			"sales_id" => $sales_id
//		]);
	}

	/**
	 *
	 */
	public function update(Request $request, $sales_id)
	{
		return ["data" => []];
//		$data = $request->json()->all();
//		return $this->_update("Sales", [
//			"sales_id" => $sales_id
//		], $data);
	}

	/**
	 * Delete product
	 */
	public function delete(Request $request, $sales_id)
	{
		return ["data" => []];
//		return $this->_delete("Sales", [
//			"sales_id" => ["=", $sales_id]
//		]);
	}
}