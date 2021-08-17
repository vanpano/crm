<?php

namespace App\Model;

use \dbObject;

class Attendee extends \dbObject {
	protected $dbTable = "attendees";
	protected $dbFields = Array(
		'projectId' => Array('int'),
		'pelicanId' => Array('int'),
		'email' => Array('text', 'required'),
		'createdAt' => Array('datetime'),
		'updatedAt' => Array('datetime'),
		'status' => Array('bool')
	);
	
	protected $relations = Array (
        'project' => Array ("hasOne", "Project", "projectIdId")

    );
}
