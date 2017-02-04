<?php

namespace App\Models;

use App\Db;
use App\Model;

class Authors
    extends Model
{


    const TABLE = 'authors';

    public $name;

    static function findByID($id)
    {
        $db = Db::instance();
        return $db->query('SELECT * FROM '.static::TABLE .' WHERE id =:id',
            [':id' => $id], static::class);
    }
}