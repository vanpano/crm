<?php

namespace App\Model;

use \dbObject;

class Cookie extends \dbObject {
	protected $dbTable = "cookies";
	protected $dbFields = Array(
		'entry' => Array('text'),
		'url' => Array('text')
	);
}
