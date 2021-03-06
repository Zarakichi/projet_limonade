<?php


class Connection {
    private $connection;
    private $dbconnect;
    private $db, $host, $user, $pass;


    public function __construct() {
        $this->db   = $GLOBALS['db'];
        $this->host = $GLOBALS['host'];
        $this->user = $GLOBALS['user'];
        $this->pass = $GLOBALS['pass'];
        $this->dbconnect = new PDO('mysql:dbname='.$this->db.';host='.$this->host, $this->user, $this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public function query($sql) {
        $sth = $this->dbconnect->prepare($sql);
        $sth->execute(array_slice(func_get_args(),1));
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function connection(){
        if(!isset($connection)){
            $connection = new Connection();
        }
        return $connection;
    }
}