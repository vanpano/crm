<?php

namespace Xhe;

class XheHead  extends XheBaseDOMVisual {
			function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Head";
	}
	};		
?>