<?php

namespace classes;

class Database {
	private static $instance = null;
	
	private $connection;
	
	private $dbHost = 'localhost'; // Update
	private $dbUser = 'root'; // Update
	private $dbPass = ''; // Update
	private $dbName = 'texas-scramble-nh'; // Update
	
	/**
	 * Database singleton constructor
	 */
	public function __construct()
	{
		// Connect to Database (mysqli connection)
		try {
			$this->connection = new \mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
			if (!$this->connection || mysqli_connect_errno()) throw new Exception('Database connection failed: '.mysqli_connect_error());
		} catch (Exception $e) {
			die('Caught exception: '.$e->getMessage());
		}
	}
	
	/**
	* Create a SQL query
	*
	* @param string $table The database table
	* @param string $cols The cols in the table
	* @param string $values The values to insert
	*
	* @return int The inserted id
	*/
	private function create(string $table, string $cols, string $values)
	{
		$query = $this->connection->query("INSERT INTO `".$table."` (".$cols.") VALUES (".$values.")");
		if (!$query) {
			return false;
		}
		return $this->connection->insert_id;
	}
	
	/**
	* Select a SQL query
	*
	* @param string $table The database table
	* @param string $where The where statement
	* @param string $order The order statement
	* @param int $limit The select limit
	*
	* @return array The selected result
	*/
	private function read(string $table, string $where, string $order = null, int $limit = null) {
		$query = $this->connection->query("SELECT * FROM ".$table." WHERE ".$where." ORDER BY ".$order." LIMIT ".$limit);
		if (!$query->num_rows) {
			return false;
		}
		return $query->fetch_all(MYSQLI_ASSOC);
	}
	
	/**
	* Selecting a query (read)
	*
	* @param string $table The database table
	* @param string $where The where statement
	* @param string $order The order statement
	* @param int $limit The select limit
	*
	* @return array The selected result
	*/
	public function get(string $table, string $where, string $order, int $limit)
	{
		return $this->read($table, $where, $order, $limit); // Read and return
	}
	
	/**
	* Insert a query (create)
	*
	* @param string $table The database table
	* @param array $fields The where statement
	*
	* @return array The selected result
	*/
	public function insert(string $table, array $fields)
	{
		$cols = implode(", ", array_keys($fields)); // Prepare cols
		$values = $fields['id'].", '".$fields['name']."', '".$fields['gender']."', ".$fields['handicap']; // Prepare values
		return $this->create($table, $cols, $values); // Insert and return
	}
}