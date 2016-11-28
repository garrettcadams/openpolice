<?php namespace OpenPolice\Models;
// generated from /resources/views/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPCLinksCivilianOrders extends Model
{
	protected $table 		= 'OPC_LinksCivilianOrders';
	protected $primaryKey 	= 'LnkCivOrdID';
	public $timestamps 		= true;
	protected $fillable 	= 
	[	
		'LnkCivOrdCivID', 
		'LnkCivOrdOrdID', 
	];
}