<?php namespace Cms\Modules\Bidding\Models;

class Items extends BaseModel {

	protected $table = 'items';
	protected $guarded = ['id'];
	protected $fillable = ['name', 'start_price', 'start_time', 'end_time', 'authored_by', 'RRP', 'created_at', 'modified_at'];


    public function getItemById($itemId) 
    {
    	// $query = DB::query()
    	
    	var_dump($this->id);
    }
}