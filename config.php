<?php
/**
 * Sumamry : Database class to provide connection to database 
 * by using singelton
 *
 */
class Db{
    private $connection;
    private static $instance;
    private $host = "localhost";
    private $username = "root";
    private $password = "123";
    private $database = "mysql";
    
    private  function __construct() 
    {
        $this->connection=mysqli_connect($this->host,$this->username,$this->password,$this->database); 

        // Check connection
        if (mysqli_connect_errno())
          {
            //echo "Failed to connect to MySQL: " . mysqli_connect_error();
          }
          else
          {
            // echo"connected";
          }
    }
    /*
     * Get instance of database
     * @return : $instance
     */
    public function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance= new self();
        }
        return self::$instance;
    }
    /*
     * the function is empty to probit form cloning
     */
    private function getClone()
    {
       // empty
    }
    /*
     * function return connection to database
     * @return $connection
     */
    public function getConnection()
    {
        return $this->connection;
    }
}



// check :p
// class Post {
//     private $_dbh;
//    public function __construct(){
//        $db = Db::getInstance();
//        $this->_dbh = $db->getConnection();
//        
//    }
//    public function getPosts()
//    {
//        try {
//            /*** The SQL SELECT statement ***/
//            $sql = "SELECT * FROM admin";
//            foreach ($this->_dbh->query($sql) as $row) {
//                var_dump($row);
//               
//            }
//            /*** close the database connection ***/
//            $this->_dbh = null;
//        } catch (PDOException $e) {
//            echo $e->getMessage();
//        }
//    }
// }
// $obj= new Post();
// $obj->getPosts();

$GLOBALS['path'] = 'http://localhost';
?>
