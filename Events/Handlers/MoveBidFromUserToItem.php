<?php namespace Cms\Modules\Bidding\Events\Handlers;

use Cms\Modules\Auth\Repositories\User\RepositoryInterface as UserRepo;
use Cms\Modules\Bidding\Repositories\Item\RepositoryInterface as ItemRepo;
use Cms\Modules\Bidding\Events\UserHasBidOnItem;
use Illuminate\Support\Facades\Request;
use BeatSwitch\Lock\Manager;

class MoveBidFromUserToItem
{

    public function __construct(ItemRepo $itemRepo, UserRepo $userRepo)
    {
        $this->itemRepo = $itemRepo;
        $this->userRepo = $userRepo;
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

        
        // Move bid from user to item listing.

        return;
    }
}
