<?php

namespace App;

use \dbObject;

class event extends \dbObject {
	protected $dbTable = "events";
	protected $dbFields = Array(
		'title' => Array('text', 'required'),
		'description' => Array('text', 'required'),
		'location' => Array('text'),
		'start_date' => Array('datetime'),
		'end_date' => Array('datetime'),
		'start_timezone' => Array('text'),
		'end_timezone' => Array('text'),
		'visibility' => Array('text'),
		'reminders' => Array('text'),
		'status' => Array('/^test/'),
		'projectId' => Array('int', 'required')
	);
	
	protected $relations = Array (
        'projectId' => Array ("hasOne", "project"),
        'project' => Array ("hasOne", "project", "projectId")
    );
}
