<?php
/**
 * Created by PhpStorm.
 * User: banshee
 * Date: 2018/7/9
 * Time: 下午6:39
 */

namespace app\models;


use app\helpers\error\ModelErrorTrait;
use app\helpers\error\ReturnErrorTrait;
use yii\base\Model;

class BaseFormModel extends Model
{
    use ReturnErrorTrait;
    use ModelErrorTrait;
}