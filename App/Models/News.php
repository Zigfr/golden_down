<?php

namespace App\Models;

use App\Model;
/**
 * Class Authors
 * @package App\Models
 *
 * @property \App\Models\Authors $author
 *
 */
class News
    extends Model
{
    const TABLE = 'news';

    public $title;
    public $lead; 
    public $author_id;

    /**
     * LAZY LOAD
     * 
     * @param $k
     * @return null
     */
    public function __get($k)
    {
        switch ($k){
            case 'author': return
                Authors::findByID($this->author_id);
                break;
            default: return null;
        }

    }
}