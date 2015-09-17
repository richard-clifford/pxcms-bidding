<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => 'bidding'], function (Router $router) {
	$router->get('overview', ['as' => 'admin.bidding.overview', 'uses' => 'BiddingAdmin@getOverview']);
});
