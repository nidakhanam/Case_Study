<?php

class db
{
	private $dbcon = null;
	
	// DB connection
	public function __construct() {
		$dbconnection = $this->dbcon = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

		if($this->dbcon->connect_errno) {
			printf("Connection failed: %s\n", $dbcon->connect_errno);
			exit();
		}
	}

	// query
	public function query($query) {
		$result = $this->dbcon->query($query);

		if($result) {
			return $result;
		}
		else {
			echo "Query error.";
		}
	}

	// escape string
	public function escape_string($string) {
		$escape = $this->dbcon->real_escape_string($string);
		return $escape;
	}

	// fetching multiple rows
	public function fetch_array($result) {
		while ($row = $result->fetch_array()) {
			return $row;
		}
	}

	// fetching the single row
	public function fetch_assoc($result) {
		$row = $result->fetch_assoc();
		return $row;
	}

	// num_rows
	public function num_rows($result) {
		$rows = $result->num_rows;
		return $rows;
	}

	// last insert id
	public function insert_id(){
		$id = $this->dbcon->insert_id;
		return $id;
	}

	// closing the database
	public function __destruct(){
		mysqli_close($this->dbcon) or die('Please Try again...!');
	}

}

?>