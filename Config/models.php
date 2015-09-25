<?php

$serializer = new SuperClosure\Serializer;
return [
	'Auth' => [
		'User' => [
			'bid' => $serializer->serialize(function($self) {
				return $self->hasOne('Cms\Modules\Bidding\Models\Bid');
			}),
		]
	]
];
