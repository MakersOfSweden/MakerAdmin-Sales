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
$app->group(array("namespace" => "App\Http\Controllers", "prefix" => "sales"), function() use ($app)
{
	// Products
	$app->   get("product",      "Product@list");   // Get collection
	$app->  post("product",      "Product@create"); // Model: Create
	$app->   get("product/{id}", "Product@read");   // Model: Read
	$app->   put("product/{id}", "Product@update"); // Model: Update
	$app->delete("product/{id}", "Product@delete"); // Model: Delete

	// Subscriptions
	$app->   get("subscription",      "Subscription@list");   // Get collection
	$app->  post("subscription",      "Subscription@create"); // Model: Create
	$app->   get("subscription/{id}", "Subscription@read");   // Model: Read
	$app->   put("subscription/{id}", "Subscription@update"); // Model: Update
	$app->delete("subscription/{id}", "Subscription@delete"); // Model: Delete

	// History
	$app->   get("history",      "Sales@list");   // Get collection
	$app->  post("history",      "Sales@create"); // Model: Create
	$app->   get("history/{id}", "Sales@read");   // Model: Read
	$app->   put("history/{id}", "Sales@update"); // Model: Update
	$app->delete("history/{id}", "Sales@delete"); // Model: Delete
});