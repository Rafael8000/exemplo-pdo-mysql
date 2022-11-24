<?php
namespace ExemploPDOMySQL;

class MySQLConnection extends \PDO{
    public function  __construct(){
        parent::_construct('mysql:host=localhost;dbname=giraffa', 'root', '');
    }
}