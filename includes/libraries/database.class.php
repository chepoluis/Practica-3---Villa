<?php

class Database extends mysqli 
{
	private $hostname;
	private $username;
	private $password;
	private $database;
	
	public function __construct() 
	{
		// Initialize object with database constants
		$this->hostname = 'localhost';
		$this->username = 'root';
		$this->password = '';
		$this->database = 'personas';	
		
	    // Open database connection
		parent::__construct($this->hostname, $this->username, $this->password, $this->database);
		parent::set_charset("utf8");
	}

}