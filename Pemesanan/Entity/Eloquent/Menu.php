<?php
namespace Latifa\Pemesanan\Entity\Eloquent;

use Illuminate\Database\Eloquent\Model;

Class Menu extends Model
{
	protected $table="menu";
	public $timestamps=false;
	public $guarded=array('id');

	function customer()
	{
		return $this->belongsToMany("Latifa\Pemesanan\Entity\Eloquent\Customer", "pemesanan");
	}

}