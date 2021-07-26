<?php
/**
 * 
 */
class Database
{
	// Server config 
	private $host='localhost';
	private $user ='root';
	private $pass='';
	private $db='society';

	private $connection;
	
	function __construct()
	{
		# code...
	}
	public function connection()
		{
			
			return $this -> connection  =  new mysqli(  $this -> host , $this -> user , $this -> pass, $this -> db);
		}
}


?>