<?php

namespace App\Models;

use App\Model;

class User
    extends Model
{
    const TABLE = 'users';
    public $email;
    public $name;

    public static function findByID(int $id)
    {
        $data = new \PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
        $sql = 'SELECT * FROM '.static::TABLE .' WHERE id ='.$id;
        $sth = $data->prepare($sql);
        $res = $sth->execute();
        if(false !== $res){
            $notes = $sth->fetchAll(\PDO::FETCH_CLASS, static::class);
            return $notes;
        }else {
            return false;
        }
    }
    
        
    

}