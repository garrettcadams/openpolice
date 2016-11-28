<?php namespace OpenPolice\Models;
// generated from /resources/views/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPCArrests extends Model
{
	protected $table 		= 'OPC_Arrests';
	protected $primaryKey 	= 'ArstID';
	public $timestamps 		= true;
	protected $fillable 	= 
	[	
		'ArstEventSequenceID', 
		'ArstChargesFiled', 
		'ArstStatedReason', 
		'ArstStatedReasonDesc', 
		'ArstMiranda', 
		'ArstSITA', 
		'ArstChargesOther', 
		'ArstNoChargesFiled', 
		'ArstStrip', 
		'ArstStripSearchDesc', 
		'ArstAllegWrongfulArrest', 
		'ArstAllegRetaliatoryCharges', 
	];
}