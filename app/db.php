<?php

$db = $container->get('db');
dbObject::autoload("models");

return ['localhost', 'root', '', 'workflow'];