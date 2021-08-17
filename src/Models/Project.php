<?php

namespace App\Model;

use \dbObject;

class Project extends \dbObject {
	protected $dbTable = "projects";
	protected $dbFields = Array(
		'label' => Array('text', 'required'),
		'description' => Array('text')
	);
	
	protected $relations = Array (
        'events' => Array ("hasMany", "Event", 'projectId')
    );
}
