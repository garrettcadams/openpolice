<?php namespace OpenPolice\Models;
// generated from /resources/views/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPCCustomers extends Model
{
	protected $table 		= 'OPC_Customers';
	protected $primaryKey 	= 'CustID';
	public $timestamps 		= true;
	protected $fillable 	= 
	[	
		'CustType', 
		'CustUserID', 
		'CustPersonID', 
		'CustTitle', 
		'CustCompanyName', 
		'CustCompanyWebsite', 
	];
}