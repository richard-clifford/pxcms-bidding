<?php namespace Cms\Modules\Bidding\Models;

class Item extends BaseModel {

	protected $table = 'items';
	protected $guarded = ['id'];
	protected $fillable = ['name', 'start_price', 'start_time', 'end_time', 'authored_by', 'condition', 'rarity', 'is_stattrak', 'RRP'];


    public function getItemById($itemId) 
    {
    	// $query = DB::query()
    	
    	var_dump($this->id);
    }
}