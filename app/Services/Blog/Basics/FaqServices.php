<?php

namespace App\Services\Blog\Basics;

use App\Models\Blog\Basics\Faq;
use App\Services\Blog\Service;

class FaqServices extends Service
{
    private static $class = null;

    public static function getInstance()
    {
        if (!isset(self::$class)) {
            self::$class = new Faq();
        }
        return self::$class;
    }

    public static function add(array $data)
    {
        return self::getInstance()->add($data);
    }

    public static function deleteByCondition($condition = [], $field = 'REPLACE_PRIMARY')
    {
        return self::getInstance()->deleteByCondition($condition, $field);
    }

    public static function getAll()
    {
        return self::getInstance()->getAll()->toArray();
    }

    public static function getByCondition($condition, $orderBy = '', $field = 'REPLACE_PRIMARY')
    {
        return self::getInstance()->getByCondition($condition, $orderBy, $field);
    }

    public static function updateByCondition($data, $condition, $field = 'REPLACE_PRIMARY')
    {
        return self::getInstance()->updateByCondition($data, $condition, $field);
    }
}
