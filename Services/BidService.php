<?php namespace Cms\Modules\Bidding\Services;

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

    public function getUserBidCount($user_id)
    {
        $userId = Auth::id();

        $authModel = config('auth.model');

        $user =  with(new $authModel)
            ->with(['bid'])
            ->find($userId);


        return !empty($user) && !empty($user->bid) ? $user->bid->bid_count : 0;
    }

}