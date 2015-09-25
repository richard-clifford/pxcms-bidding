<?php namespace Cms\Modules\Bidding\Services;

use Cms\Modules\Bidding\Models\Item;
use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Support\Facades\Auth;
use Pingpong\Modules\Repository as Module;

class ItemService
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

    public function itemExists($itemId)
    {
        $userId = Auth::id();

        $item =  Item::where('active', 1)
        ->where('id', $itemId)
        ->take(1)
        ->first();


        return !empty($item) ? $item->id : 0;
    }
}