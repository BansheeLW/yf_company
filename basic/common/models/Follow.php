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
 * @property integer $area
 * @property integer $customer_type
 * @property integer $follow_status
 * @property string $follow_date
 */
class Follow extends BaseActiveRecord{

    public static function tableName()
    {
        return 'yf_follow';
    }

    public static function getByCompanyName($company_name){
        return self::find()
            ->select(['staff_name','company_name','customer_type','follow_status','follow_date'])
            ->where(['like','company_name',$company_name])
            ->limit(10)
            ->all();
    }
}