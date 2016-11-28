<?php namespace OpenPolice\Models;
// generated from /resources/views/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPCVehicles extends Model
{
	protected $table 		= 'OPC_Vehicles';
	protected $primaryKey 	= 'VehicID';
	public $timestamps 		= true;
	protected $fillable 	= 
	[	
		'VehicTransportation', 
		'VehicVehicleMake', 
		'VehicVehicleModel', 
		'VehicVehicleDesc', 
		'VehicVehicleLicence', 
		'VehicVehicleNumber', 
	];
}