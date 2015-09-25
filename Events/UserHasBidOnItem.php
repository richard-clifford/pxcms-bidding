<?php namespace Cms\Modules\Bidding\Events;

use Illuminate\Queue\SerializesModels;

class UserHasBidOnItem
{
    use SerializesModels;

    public $userId;
    public $itemId;

    /**
     * Create a new event instance.
     *
     * @param int userId the primary key of the user who was just bid.
     * @param int itemId
     */
    public function __construct($userId, $itemId)
    {
        $this->userId = $userId;
        $this->itemId = $itemId;
    }

}
