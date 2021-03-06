<?php namespace App\Models;
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-model-gen.blade.php

use Illuminate\Database\Eloquent\Model;

class OPStopReasons extends Model
{
    protected $table      = 'OP_StopReasons';
    protected $primaryKey = 'StopReasID';
    public $timestamps    = true;
    protected $fillable   = 
    [    
		'StopReasStopID', 
		'StopReasReason', 
    ];
    
    // END SurvLoop auto-generated portion of Model
    
}
