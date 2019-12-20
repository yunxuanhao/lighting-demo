<?php


namespace Yunxuan\LightingDemo\Model;


use Yunxuan\Lighting\Orm;

class StudentModel extends Orm
{
    protected $dbConfig = 'mysql.default';
    protected $table = 'student';
}