<?php
	interface iDataWork
	{
		public function add($key,$value);
		public function read($key);
		public function remove($key);
	}
?>
