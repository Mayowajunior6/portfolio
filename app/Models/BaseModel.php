<?php

/**
 * BaseModel Parent Class
 * @file: BaseModel.php
 * @author: Mayowa Ajamu <mayowajunior6@gmail.com, ajamu-m@webmail.uwinnipeg.ca>
 * @updated_at: 09-08-2020
 */
namespace App\Models;

abstract class BaseModel
{
    
    static protected $dbh;

    /**
     * Table name
     * @var string
     */
    protected $table;

    /**
     * Primary key name
     * @var string
     */
    protected $key;

    // Can be invoked without instantiating
    // an object:  Model::init()
    // Type hinting using \PDO
    static public function init(\PDO $dbh)
    {
        self::$dbh = $dbh;
    }

    /**
     * Function to select all records
     * @return array
     */
    public function all()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = self::$dbh->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * Function to select 0ne record
     * @param  String $id
     * @return array
     */
    public function one($id)
    {
        $query = "SELECT * FROM {$this->table} 
                WHERE {$this->key} = :id";

        $stmt = self::$dbh->prepare($query);
        $params = array(':id' => $id);
        $stmt->execute($params);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}