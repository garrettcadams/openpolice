<?php namespace OpenPolice\Models;
// generated from /resources/views/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPCPersonContact extends Model
{
	protected $table 		= 'OPC_PersonContact';
	protected $primaryKey 	= 'PrsnID';
	public $timestamps 		= true;
	protected $fillable 	= 
	[	
		'PrsnNamePrefix', 
		'PrsnNameFirst', 
		'PrsnNickname', 
		'PrsnNameMiddle', 
		'PrsnNameLast', 
		'PrsnNameSuffix', 
		'PrsnEmail', 
		'PrsnPhoneHome', 
		'PrsnPhoneWork', 
		'PrsnPhoneMobile', 
		'PrsnAddress', 
		'PrsnAddress2', 
		'PrsnAddressCity', 
		'PrsnAddressState', 
		'PrsnAddressZip', 
		'PrsnBirthday', 
		'PrsnFacebook', 
	];
}