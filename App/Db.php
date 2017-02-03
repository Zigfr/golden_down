<?php

namespace App;

class Db
{
    use Singletone;

    protected $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    }
    
    public function execute($sql,  $param = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($param);
        return $res; 
    }
    
    public function query($sql, $param = [], $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($param);
        if(false !== $res){
            $dat = $sth->fetchAll(\PDO::FETCH_CLASS, $class);
            return $dat;
        }else{
            return [];
        }
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}