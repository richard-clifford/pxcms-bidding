<?php namespace Cms\Modules\Bidding\Http\Controllers\Backend;

use Cms\Modules\Core\Http\Controllers\BaseBackendController;

class BiddingAdminController extends BaseBackendController
{

    public function getOverview()
    {
        return $this->setView('backend.index', [

        ]);
    }

}
