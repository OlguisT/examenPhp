<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-54-163-230-219.compute-1.amazonaws.com");
define("DB_USER", "heahzkoxtvgywg");
define("DB_PASS", "9cda6d4a2dcbb92898bf6e6d02851b6466704dada75dba50a195fbfc85cc8a53");
define("DB_NAME", "d3t4fru243rnhu");

//define("DB_HOST", "localhost");
//define("DB_USER", "postgres");
//define("DB_PASS", "postgres");
//define("DB_NAME", "comunidad");



class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
