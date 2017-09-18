<?php
include_once('dataBase.php');

// Define configuration

define("DB_HOST", "ec2-54-163-230-219.compute-1.amazonaws.com");
define("DB_USER", "pgmfrjwdtzjwrp");
define("DB_PASS", "2d72d0f3411301ef353eb28da736b72321048f7e4f6c53ff984af71813879f3b");
define("DB_NAME", "dftgqjbnucrk1o");

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
