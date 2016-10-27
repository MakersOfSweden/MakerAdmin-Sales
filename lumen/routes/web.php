<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// Sales
$app->group(array("prefix" => "sales"), function() use ($app)
{
	// Products
	$app->   get("product",      "V2\Product@list");   // Get collection
	$app->  post("product",      "V2\Product@create"); // Model: Create
	$app->   get("product/{id}", "V2\Product@read");   // Model: Read
	$app->   put("product/{id}", "V2\Product@update"); // Model: Update
	$app->delete("product/{id}", "V2\Product@delete"); // Model: Delete

	// Subscriptions
	$app->   get("subscription",      "V2\Subscription@list");   // Get collection
	$app->  post("subscription",      "V2\Subscription@create"); // Model: Create
	$app->   get("subscription/{id}", "V2\Subscription@read");   // Model: Read
	$app->   put("subscription/{id}", "V2\Subscription@update"); // Model: Update
	$app->delete("subscription/{id}", "V2\Subscription@delete"); // Model: Delete

	// History
	$app->   get("history",      "V2\Sales@list");   // Get collection
	$app->  post("history",      "V2\Sales@create"); // Model: Create
	$app->   get("history/{id}", "V2\Sales@read");   // Model: Read
	$app->   put("history/{id}", "V2\Sales@update"); // Model: Update
	$app->delete("history/{id}", "V2\Sales@delete"); // Model: Delete
});