<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPPrivilegeProfiles extends Model
{
    protected $table      = 'OP_PrivilegeProfiles';
    protected $primaryKey = 'PrivID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'PrivUserID', 
		'PrivComplaintID', 
		'PrivDeptID', 
		'PrivAccessLevel', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
