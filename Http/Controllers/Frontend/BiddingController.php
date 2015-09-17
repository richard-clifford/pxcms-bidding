<?php namespace Cms\Modules\Bidding\Http\Controllers\Frontend;

class BiddingController extends BaseController
{

    public function getIndex()
    {
        return $this->setView('frontend.index', [

        ]);
    }

    public function processBid($item_id) {


    	var_dump($item_id);
    }
}
