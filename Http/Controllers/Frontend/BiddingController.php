<?php namespace Cms\Modules\Bidding\Http\Controllers\Frontend;

use \Cms\Modules\Bidding\Models\Bidding;

class BiddingController extends BaseController
{

    public function getIndex()
    {
        return $this->setView('frontend.index', [

        ]);
    }

    public function processBid($item_id) {

        $intOut = 0;

        $bidCount = intval(Bidding::getUserBidCount());

        if($bidCount > 0) {

            $bidOnItem = Bidding::bidOnItem($item_id);

            $updateUserBidCount = Bidding::updateUserBidCount(($bidCount - 1));

            if($updateUserBidCount === true) {

                $intOut = 1;
            }
        }

        return $intOut;
    }
}
