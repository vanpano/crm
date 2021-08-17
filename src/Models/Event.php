<?php

namespace App\Model;

use \dbObject;

class Event extends \dbObject {
	protected $dbTable = "events";
	protected $dbFields = Array(
		'projectId' => Array('int'),
		'title' => Array('text', 'required'),
		'description' => Array('text', 'required'),
		'location' => Array('string'),
		'startAt' => Array('datetime'),
		'endAt' => Array('datetime'),
		'createdAt' => Array('datetime'),
		'updatedAt' => Array('datetime'),
		'startTimezone' => Array('string'),
		'endTimezone' => Array('string'),
		'visibility' => Array('string'),
		'reminders' => Array('text'),
		'working' => Array('bool'),
		'status' => Array('bool')
	);
	
	protected $relations = Array (
        'project' => Array ("hasOne", "Project", "projectId")
    );
}
