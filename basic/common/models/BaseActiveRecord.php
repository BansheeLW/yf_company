<?php
/**
 * Created by PhpStorm.
 * User: banshee
 * Date: 2018/7/9
 * Time: 下午10:28
 */

namespace app\common\models;

use app\helpers\error\ModelErrorTrait;
use app\helpers\error\ReturnErrorTrait;
use yii\db\ActiveRecord;

class BaseActiveRecord extends ActiveRecord {
    use ReturnErrorTrait;
    use ModelErrorTrait;

}