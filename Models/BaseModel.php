<?php namespace Cms\Modules\Bidding\Models;

use Cms\Modules\Core\Models\BaseModel as CoreBaseModel;

class BaseModel extends CoreBaseModel
{

    public function __construct()
    {
        parent::__construct();

        $prefix = config('cms.bidding.config.table-prefix', 'bidding_');
        $this->table = $prefix.$this->table;
    }

}
