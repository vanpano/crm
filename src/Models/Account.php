<?php

namespace App\Model;

use \dbObject;

class Account extends \dbObject {
	protected $dbTable = "accounts";
	protected $dbFields = Array(
		'proxyId' => Array('int'),
		'cookieId' => Array('int'),
		'avatarId' => Array('int'),
		'email' => Array('text', 'required'),
		'password' => Array('text', 'required'),
		'rEmail' => Array('text'),
		'phone' => Array('text'),
		'loginAt' => Array('datetime'),
		'createdAt' => Array('datetime'),
		'updatedAt' => Array('datetime'),
		'deactivatedAt' => Array('datetime'),
		'used' => Array('int'),
		'working' => Array('bool'),
		'status' => Array('bool')
	);
	
	protected $relations = Array (
        'proxy' => Array ("hasOne", "proxy"),
        'proxyId' => Array ("hasOne", "proxy", "proxyId"),
        'cookie' => Array("hasOne", "App\Model\Cookie", "cookieId"),
        //'avatar' => Array ("hasOne", "avatar", "avatarId"),
    );
	
}
