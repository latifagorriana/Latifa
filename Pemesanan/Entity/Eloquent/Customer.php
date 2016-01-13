<?php

namespace Latifa\Pemesanan\Entity\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{	
	protected $table = "customer";
    public $timestamps = false;
	protected $guarded = array("id");

	public function menu()
	{
		return $this->belongsToMany("Latifa\Pemesanan\Entity\Eloquent\Menu", "pemesanan");
	}

}
