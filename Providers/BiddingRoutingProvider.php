<?php namespace Cms\Modules\Bidding\Providers;

use Cms\Modules\Core\Providers\CmsRoutingProvider;
use Illuminate\Routing\Router;
use Cms\Modules\Bidding;

class BiddingRoutingProvider extends CmsRoutingProvider
{

    protected $namespace = 'Cms\Modules\Bidding\Http\Controllers';

    /**
     * @return string
     */
    protected function getFrontendRoute()
    {
        return __DIR__ . '/../Http/routes-frontend.php';
    }

    /**
     * @return string
     */
    protected function getBackendRoute()
    {
        return __DIR__ . '/../Http/routes-backend.php';
    }

    /**
     * @return string
     */
    protected function getApiRoute()
    {
        return __DIR__ . '/../Http/routes-api.php';
    }

    public function boot(Router $router)
    {
        parent::boot($router);

        $router->bind('bidding_item_id', function($item) {
            return with(new \Cms\Modules\Bidding\Models\Item)->findOrFail($item);
        });
    }
}
