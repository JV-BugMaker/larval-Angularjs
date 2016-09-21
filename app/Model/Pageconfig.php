<?php
/*
 * 模型文件 pageconfig
 * Eloquent 也会假设每个数据库表都有一个字段名称为 id 的主键。您可以在类里定义 primaryKey 属性来重写。
 * 同样的，您也可以定义 connection 属性，指定模型连接到指定的数据库连接。
 * */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pageconfig extends Model
{
    protected $table = 'page_config';

    public static function getAll()
    {
        $data = Pageconfig::all();
        //数据对象
        return $data;
    }

}