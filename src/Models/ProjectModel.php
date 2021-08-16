<?php

namespace App;

use \dbObject;

class project extends \dbObject {
	protected $dbTable = "projects";
	protected $dbFields = Array(
		'label' => Array('text', 'required'),
		'description' => Array('text')
	);
	
	protected $relations = Array (
        'events' => Array ("hasMany", "event", 'projectId')
    );
}
