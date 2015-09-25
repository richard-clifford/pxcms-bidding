<?php namespace Cms\Modules\Bidding\Providers;

use Cms\Modules\Core\Providers\BaseModuleProvider;

class BiddingModuleServiceProvider extends BaseModuleProvider
{

    /**
     * Register the defined middleware.
     *
     * @var array
     */
    protected $middleware = [
        'Bidding' => [
        ],
    ];

    /**
     * The commands to register.
     *
     * @var array
     */
    protected $commands = [
        'Bidding' => [
        ],
    ];

    /**
     * Register view composers
     *
     * @var array
     */
    protected $composers = [
        'Bidding' => [
        ],
    ];

    /**
     * Register repository bindings to the IoC
     *
     * @var array
     */
    protected $bindings = [
        'Cms\Modules\Bidding\Repositories\Item' => ['RepositoryInterface' => 'EloquentRepository'],
    ];

    /**
     * Register Auth related stuffs
     */
    public function register()
    {
        parent::register();

    }

}
