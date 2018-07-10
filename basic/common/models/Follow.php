<?php
/**
 * Created by PhpStorm.
 * User: banshee
 * Date: 2018/7/9
 * Time: 下午10:25
 *
 */

namespace app\common\models;


/**
 * This is the model class for table "task".
 *
 * @property integer $yf_follow_id
 * @property string $staff_name
 * @property string $company_name
 * @property string $area
 * @property string $customer_type
 * @property string $follow_status
 */
class Follow extends BaseActiveRecord{

    public static function tableName()
    {
        return 'yf_follow';
    }

    public static function getByCompanyName($company_name){
        return self::find()
            ->select(['staff_name','company_name','customer_type','follow_status'])
            ->where(['like','company_name',$company_name])
            ->limit(10)
            ->all();
    }
}