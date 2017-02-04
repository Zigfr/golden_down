<?php

namespace App\Models;

use App\Magic;
use App\Model;

class Authors
    extends Model
{
    use Magic;

    const TABLE = 'authors';

    public $name;

    static function findByID(int $id)
    {

    }
}