<?php namespace Cms\Modules\Bidding\Http\Controllers\Frontend;

use Cms\Modules\Bidding\Events\UserHasBidOnItem;
use Cms\Modules\Bidding\Http\Controllers\Frontend\BiddingController;
use Cms\Modules\Bidding\Services\BidService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BiddingController extends BaseController
{

    public function __construct(BidService $bid)
    {
        $this->bid = $bid;
    }

    public function getIndex()
    {
        return $this->setView('frontend.index', [

        ]);
    }

    public function processBid(Request $input) 
    {

        dd($input);

        $item = $input->get('item_id');
        $bids = $input->get('bids');

        if(empty($item) || empty($bids)) {
            return false;
        }

        dd($item, $bids);

        event(new UserHasBidOnItem(Auth::id(), $item));

        return;
    }
}

