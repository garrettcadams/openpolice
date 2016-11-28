<?php

namespace OpenPolice\Models;

use Illuminate\Database\Eloquent\Model;

class OPCzVolunStatDays extends Model
{
	protected $table = 'OPC_zVolunStatDays';
	protected $primaryKey = 'VolunStatID';
	public $timestamps = true;
	
	protected $fillable = [
		'VolunStatDate', 'VolunStatSignups', 'VolunStatLogins', 'VolunStatUsersUnique', 'VolunStatDeptsUnique', 
		'VolunStatOnlineResearch', 'VolunStatCallsDept', 'VolunStatCallsIA', 'VolunStatCallsTot', 'VolunStatTotalEdits', 
		'VolunStatOnlineResearchV', 'VolunStatCallsDeptV', 'VolunStatCallsIAV', 'VolunStatCallsTotV', 'VolunStatTotalEditsV', 
	];
    
}
