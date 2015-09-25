<?php namespace Cms\Modules\Bidding\Http\Controllers\Frontend;

use Cms\Modules\Bidding\Events\UserHasBidOnItem;
use Cms\Modules\Bidding\Http\Controllers\Frontend\BiddingController;
use Cms\Modules\Bidding\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BiddingController extends BaseController
{

    public function getIndex()
    {
        return $this->setView('frontend.index', [

        ]);
    }

    public function processBid(Item $item) 
    {
        
        event(new UserHasBidOnItem(Auth::id(), $item->id)); 
        
        return;
    }
}

