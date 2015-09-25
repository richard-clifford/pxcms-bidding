<?php namespace Cms\Modules\Bidding\Repositories\Item;

use Illuminate\Database\Eloquent\Collection;
use Cms\Modules\Core\Repositories\BaseEloquentRepository;
use Cms\Modules\Auth\Repositories\Item\RepositoryInterface as UserRepository;

class EloquentRepository extends BaseEloquentRepository implements UserRepository
{
    public function getModel()
    {
        return 'Cms\Modules\Bidding\Models\Item';
    }
}
