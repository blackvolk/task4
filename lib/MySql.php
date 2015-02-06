<?php
	class MySql implements iDataWork
	{
		private $db;
		private $dbLink;

		function __construct($host,$user_n,$data_b,$pass)
		{
			$this->dbLink=mysql_connect($host,$user_n,$pass);
			$this->db=mysql_select_db($data_b,$this->dbLink);
		}
		function add($key,$value)
		{
			$query=sprintf("INSERT INTO task4 (keyyN,valuesN) VALUES('%s','%s')",
			mysql_real_escape_string($key),mysql_real_escape_string($value));
			return mysql_query($query);
		}

		function read($key)
		{
			$query=sprintf("SELECT valuesN FROM task4 WHERE keyyN='%s'",
			mysql_real_escape_string($key));
			$result = mysql_fetch_assoc(mysql_query($query));
			return $result['valuesN'];
		}
		
		function remove($key)
		{
			$query=sprintf("DELETE FROM task4 WHERE keyyN='%s'",mysql_real_escape_string($key));				
			return msql_query($query);	
		}
		function __destruct()
		{
			mysql_close($this->dbLink);	
		}

	}

?>
