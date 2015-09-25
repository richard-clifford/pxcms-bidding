<?php namespace Cms\Modules\Bidding\Http\Controllers\Frontend;

use Cms\Modules\Bidding\Services\ItemService;

class ItemController extends BaseController
{

	public function __construct(ItemService $itemService){
		$this->itemService = $itemService;
	}

    public function getIndex()
    {
        return $this->setView('frontend.index', [

        ]);
    }

    public function getListings() {
    	return response()->json($this->itemService->getAllCurrentListings());
    }
}
