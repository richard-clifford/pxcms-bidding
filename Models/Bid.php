<?php namespace Cms\Modules\Bidding\Models;

use Illuminate\Support\Facades\DB;

class Bid extends BaseModel {

	public $table = 'bids';
	protected $casts = [
		'bid_count' => 'int'
	];

}