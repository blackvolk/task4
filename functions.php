<?php
	function __autoload ($className)
	{
		require_once(LIB_PATH . $className . '.php');	
	}
?>
