<?php namespace Cms\Modules\Bidding\Services;

use Cms\Modules\Bidding\Models\Bid;
use Cms\Modules\Bidding\Models\Item;
use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Support\Facades\Auth;
use Pingpong\Modules\Repository as Module;

class BidService
{
    
    /**
    * @var Illuminate\Contracts\Config\Repository
    */
    protected $config;

    /**
    * @var Modules
    */
    protected $modules;

    public function __construct(Config $config, Module $modules)
    {
        $this->config = $config;
        $this->modules = $modules;
    }

    public function getUserBidCount($userId = null)
    {

        if(empty($userId)) {
            
            $userId = Auth::id();
        }
        
        $authModel = config('auth.model');

        $user =  with(new $authModel)
            ->with(['bid'])
            ->find($userId);


        return !empty($user) && !empty($user->bid) ? $user->bid->bid_count : 0;
    }

    public function updateUserBidCount($newBidCount) 
    {
        $userId = Auth::id();

        $authModel = config('auth.model');

        $updateUser = Bid::where('user_id', $userId)
            ->update(['bid_count' => $newBidCount]);

        return $updateUser;
    }

    public function bidOnItem($itemId) 
    {
        $userId = Auth::id();

        $authModel = config('auth.model');

        $user =  with(new $authModel)
            ->with(['bid'])
            ->find($userId);

        if(empty($user) || empty($user->bid)) {
            throw new Exception(sprintf('User ID %d failed to bid on item ID %d', $userId, $itemId));
            return false;
        }

        $item = Item::where('id', $itemId)->firstOrFail();

        dd($item->id);

    }
}