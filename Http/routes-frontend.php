<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => 'bidding'], function (Router $router) {

    // Default pages
    $router->get('/', ['as' => 'pxcms.bidding.index', 'uses' => 'PagesController@getIndex']);
	

	// All AJAX stuff
	$router->group(['prefix' => 'bid'], function(Router $router) {

		$router->get('{item_id}', ['as' => 'pxcms.bidding.bid', 'uses' => 'BiddingController@processBid']);
	});
});

