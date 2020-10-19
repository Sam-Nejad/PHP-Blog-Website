<?php
define('DB_HOST', getenv("MYSQL_SERVICE_HOST"));
define('DB_USER', getenv("DATABASE_USER"));
define('DB_PASS', getenv("DATABASE_PASSWORD"));
define('DB_NAME', getenv("DATABASE_NAME"));

class Database{

	public $host = DB_HOST;
	public $username = DB_USER;
	public $password = DB_PASS;
	public $db_name = DB_NAME;

	public $link;
	public $error;
	public function __construct(){
		$this->connect();
	}
	 private function connect(){
		$this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name);
		
		if(!$this->link){
			$this->error = "Connection Failed: ".$this->link->connect_error;
			return false;
		}
	 }
	  public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		} else {
			return false;
		}
	  }
	   public function insert($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			
			//Validate Insert
			if($insert_row){
				header("Location: ../viewBlog.php?msg=".urlencode('Record Added'));
				exit();
			} else {
				die('Error : ('. $this->link->errno .') '. $this->link->error);
			}
	   }
}