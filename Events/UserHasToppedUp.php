<?php namespace Cms\Modules\Bidding\Events;

use Illuminate\Queue\SerializesModels;

class UserHasToppedUp
{
    use SerializesModels;

    public $userId;

    /**
     * Create a new event instance.
     *
     * @param int userId the primary key of the user who was just topped up.
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

}
