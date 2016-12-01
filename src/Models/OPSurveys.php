<?php namespace OpenPolice\Models;
// generated from /resources/views/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPSurveys extends Model
{
	protected $table 		= 'OP_Surveys';
	protected $primaryKey 	= 'SurvID';
	public $timestamps 		= true;
	protected $fillable 	= 
	[	
		'SurvComplaintID', 
		'SurvAuthUserID', 
	];
}