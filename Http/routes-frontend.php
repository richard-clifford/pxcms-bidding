<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => 'bidding'], function (Router $router) {

    // Default pages
    $router->get('/', ['as' => 'pxcms.bidding.index', 'uses' => 'PagesController@getIndex']);
	
	// All AJAX stuff
	$router->group(['prefix' => 'ajax'], function(Router $router) {

		// Item related stuff
		$router->group(['prefix' => 'items'], function(Router $router){
			$router->get('get_listings', [
				'as' => 'pxcms.bidding.listings', 
				'uses' => 'ItemController@getListings',
			]);
		});

		// Bidding related stuff
		$router->group(['prefix' => 'bid'], function(Router $router) {
			$router->get('{bidding_item_id}', [
				'as' => 'pxcms.bidding.bid', 
				'uses' => 'BiddingController@processBid',
			]);
		});
	});
});

