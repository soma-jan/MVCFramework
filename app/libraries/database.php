<?php 
 class Database
 {
        private $dbhost = DB_HOST;
        private $dbname = DB_NAME;
        private $dbuser = DB_USER;
        private $dbpass = DB_PASS;
        
        private $dbh ='';
        private $stmt ='';
        private $error ='';

       

        //set dsn 
        public function __construct(){
            // Set DSN
            $dsn = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->dbname;
            $options = array(
              PDO::ATTR_PERSISTENT => true,
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
      
            // Create PDO instance
            try{
              $this->dbh = new PDO($dsn, $this->dbuser, $this->dbpass, $options);
            } catch(PDOException $e){
              $this->error = $e->getMessage();
              echo $this->error;
            }
          }
        }

        









    


?>