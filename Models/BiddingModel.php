<?php namespace Cms\Modules\Bidding\Models;

class Bidding extends BaseModel {

	public function __construct()
    {
        parent::__construct();

        $prefix = config('cms.bidding.config.table-prefix', 'bidding_');
        
        $this->table = $prefix.$this->table;
    }
}