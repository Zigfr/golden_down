<?php

namespace App;

abstract class Model
{
    const TABLE = '';
    
    public $id;

    public static function findAll()
    {
        $db = Db::instance();
        return $db->query('SELECT * FROM '.static::TABLE, [], static::class);
    }
    
    public function isNew()
    {
        return empty($this->id);
    }
    
    public function insert()
    {
        if(!$this->isNew()){
            return;
        }
        $columns = [];
        $values = [];
        foreach($this as $k => $v)
        {
            if('id' == $k){
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }

        $sql = 'INSERT INTO '. static::TABLE . ' (' . implode(',', $columns) .') VALUES '.
           ' (' . implode(',', array_keys($values)) .')';
        $db = Db::instance();
        $res = $db->execute($sql, $values);
        $this->id = $db->lastInsertId();
        return $res;
    }

    public function update()
    {
        foreach($this as $k => $v)
        {
            if('id' == $k){
                continue;
            }
            $columns[] = $k.'=:'.$k;
        }
        foreach($this as $k => $v)
        {
            $values[':'.$k] = $v;
        }

        $sql = 'UPDATE '. static::TABLE . ' SET '. implode(', ', $columns) .' WHERE id = :id';

        $db = Db::instance();
        $db->execute($sql, $values);
    }

    public function save()
    {
        if($this->isNew()){
            $this->insert();
        }else{
            $this->update();
        }
    }
    
    public function delete()
    {
        $sql = 'DELETE FROM '. static::TABLE . ' WHERE id = :id';
        $values[':id'] = $this->id;

        $db = Db::instance();
        $db->execute($sql, $values);
    }

}