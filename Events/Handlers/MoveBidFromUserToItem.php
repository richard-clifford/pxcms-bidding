<?php namespace Cms\Modules\Auth\Events\Handlers;

use Cms\Modules\Bidding\Events\UserHasBidOnItem;
use Illuminate\Support\Facades\Request;
use BeatSwitch\Lock\Manager;
use Cms\Modules\Auth\Repositories\User\RepositoryInterface as UserRepo;
use Cms\Modules\Bidding\Repositories\Item\RepositoryInterface as ItemRepo;

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
        // validate the item exists
        $item = $itemRepo->getById($event->itemId);
        if ($item === null) {
            return false;
        }

        // validate the current user has >= bids trying to bid on
        $user = $userRepo->getById($event->userId);
        if ($user === null) {
            return false;
        }

        dd($user->find(['id'])->firstOrFail());


        return $event->config;
    }

}
