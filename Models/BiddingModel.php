<?php namespace Cms\Modules\Bidding\Models;

use Illuminate\Support\Facades\DB;

class Bidding extends BaseModel {

	public function __construct()
    {
        parent::__construct();

        $prefix = config('cms.bidding.config.table-prefix', 'bidding_');
        
        $this->table = $prefix.$this->table;
    }

    public static function getUserBidCount() {

    	$intOut = 0;

    	$userBidCount = DB::table('user_bids')
    		->select('bid_count')
    		->where(['user_id' => \Auth::id()])
    		->value('bid_count');

		return intval($userBidCount);
    }

    public static function updateUserBidCount($bidCount) {

		$userBidCount = DB::table('user_bids')
			->where('user_id', \Auth::id())
			->update(['bid_count' => $bidCount]);

		return $userBidCount;
    }
}