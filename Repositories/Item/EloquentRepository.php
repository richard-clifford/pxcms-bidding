<?php namespace Cms\Modules\Bidding\Repositories\Item;

use Illuminate\Database\Eloquent\Collection;
use Cms\Modules\Core\Repositories\BaseEloquentRepository;
use Cms\Modules\Bidding\Repositories\Item\RepositoryInterface as ItemRepository;

class EloquentRepository extends BaseEloquentRepository implements ItemRepository
{
    public function getModel()
    {
        return 'Cms\Modules\Bidding\Models\Item';
    }
}
