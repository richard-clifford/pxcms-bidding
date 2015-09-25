<?php namespace Cms\Modules\Bidding\Events\Handlers;

use BeatSwitch\Lock\Manager;
use Cms\Modules\Auth\Repositories\User\RepositoryInterface as UserRepo;
use Cms\Modules\Bidding\Events\UserHasBidOnItem;
use Cms\Modules\Bidding\Repositories\Item\RepositoryInterface as ItemRepo;
use Cms\Modules\Bidding\Services\BidService;
use Illuminate\Support\Facades\Request;

class MoveBidFromUserToItem
{

    public function __construct(ItemRepo $itemRepo, UserRepo $userRepo, BidService $bidService)
    {
        $this->itemRepo = $itemRepo;
        $this->userRepo = $userRepo;

        $this->bidService = $bidService;
    }


    /**
     * Handle the event.
     *
     * @param  UserHasBidOnItem $event
     * @return void
     */
    public function handle(UserHasBidOnItem $event)
    {
        if (in_array(null, [$event->userId, $event->itemId])) {
            throw new Exception('Undefined Variable being passed. Expected UserId and ItemId');
        }

        // validate the item exists
        $item = $this->itemRepo->getById($event->itemId);
        if ($item === null) {
            throw new Exception('Expected itemId, null given');
        }

        // validate the current user has >= bids trying to bid on
        $user = $this->userRepo->getById($event->userId);
        if ($user === null) {
            throw new Exception('Expected userId, null given');
        }

        // Check if user can bid (is not banned, is active and has bids)
        $userBidCount = $this->bidService->getUserBidCount();

        if($userBidCount <= 0) {
            throw new Exception(sprintf('User ID: %s Does not have any bids', $event->userId));
        }

        // Move bid from user to item listing.
        $this->bidService->bidOnItem($event->itemId);
        

        // Update timer, price, etc


        return;
    }
}
