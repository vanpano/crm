<?php

namespace App\Model;

use \dbObject;

class GoogleAccount extends \dbObject {
	protected $dbTable = "google_accounts";
	protected $dbFields = Array(
		'proxyId' => Array('int'),
		'cookieId' => Array('int'),
		'avatarId' => Array('int'),
		'email' => Array('string'),
		'password' => Array('string'),
		'rEmail' => Array('string'),
		'phone' => Array('string'),
		'loginAt' => Array('datetime'),
		'createdAt' => Array('datetime'),
		'updatedAt' => Array('datetime'),
		'deactivatedAt' => Array('datetime'),
		'used' => Array('int'),
		'working' => Array('bool'),
		'status' => Array('bool')
	);
	
	protected $relations = Array (
        'proxy' => Array ("hasOne", "proxy", "proxyId"),
        'cookie' => Array ("hasOne", "cookie", "cookieId"),
        'avatar' => Array ("hasOne", "avatar", "avatarId"),
    );
}
