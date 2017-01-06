<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\EntityStandardFiltering;

class Subscription extends Controller
{
	use EntityStandardFiltering;

	/**
	 *
	 */
	public function list(Request $request)
	{
		$params = $request->query->all();
		return $this->_list("Subscription", $params);
	}

	/**
	 *
	 */
	public function create(Request $request)
	{
		$data = $request->json()->all();
		return $this->_create("Subscription", $data);
	}

	/**
	 *
	 */
	public function read(Request $request, $subscription_id)
	{
		return $this->_read("Subscription", [
			"subscription_id" => $subscription_id
		]);
	}

	/**
	 *
	 */
	public function update(Request $request, $subscription_id)
	{
		$data = $request->json()->all();
		return $this->_update("Subscription", [
			"subscription_id" => $subscription_id
		], $data);
	}

	/**
	 *
	 */
	public function delete(Request $request, $subscription_id)
	{
		return $this->_delete("Subscription", [
			"subscription_id" => ["=", $subscription_id]
		]);
	}
}