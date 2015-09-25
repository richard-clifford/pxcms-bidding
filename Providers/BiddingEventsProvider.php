<?php namespace Cms\Modules\Bidding\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Cms\Modules\Core\Providers\BaseEventsProvider;

class BiddingEventsProvider extends BaseEventsProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        /**
         */
        'Cms\Modules\Bidding\Events\UserHasToppedUp' => [
        ],

        /**
         */
        'Cms\Modules\Bidding\Events\UserHasBidOnItem' => [
        ],

        /**
         */
        'Cms\Modules\Bidding\Events\UserHasWonItem' => [
        ],

    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [

    ];


    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

    }

}
