<?php namespace Cms\Modules\Bidding\Http\Controllers\Frontend;

class PagesController extends BaseController
{

    public function getIndex()
    {
        return $this->setView('frontend.index', [

        ]);
    }


}
