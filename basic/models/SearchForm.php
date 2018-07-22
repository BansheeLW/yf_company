<?php
/**
 * Created by PhpStorm.
 * User: banshee
 * Date: 2018/7/9
 * Time: 下午6:16
 */

namespace app\models;

use app\common\models\Follow;
use app\helpers\error\ErrorInfo;

class SearchForm extends BaseFormModel {

    public $name;
    public $password;
    public $company_name;
    public $version;

    const NAME = 'yf_company';
    const PASS = 'wujia1314';

    const SCENARIO_GET_DATA = 'get_data';


    public static $areaList = [0=>'', 1=>'宝安区',2=>'罗湖区',3=>'龙华区',4=>'光明区',5=>'南山区',6=>'福田区',7=>'龙岗区',8=>'坪山区',9=>'大鹏区',10=>'盐田区',11=>'东莞',12=>'其他'];
    public static $typeList = [0=>'',1=>'A+：关系非常好的优质客户',2=>'A：关系很好',3=>'B：关系一般',4=>'C：无法跟进',5=>'D：黑名单'];
    public static $statusList = [0=>'',1=>'已签合同',2=>'留/寄合同中',3=>'面谈后待跟进',4=>'已约见面',5=>'已加联系方式'];


    public function rules()
    {
        return [
            [['name','password', 'company_name'], 'string'],
            [['company_name','version'],'required','on'=>self::SCENARIO_GET_DATA],
        ];
    }

    public function login(){
        if(!$this->validate()){
            return $this->returnAndSetError(new ErrorInfo(['code'=>'-1','message'=>'参数错误']));
        }
        if($this->name !== self::NAME || $this->password !== self::PASS){
            return $this->returnAndSetError(new ErrorInfo(['code'=>'-1','message'=>'账号或密码错误']));
        }
        return true;
    }

    public function getData(){
        if(!$this->validate()){
            if(array_key_exists('version',$this->getFirstErrors())){
                return $this->returnAndSetError(new ErrorInfo(['code'=>'-1','message'=>'旧版已废弃，请更新客户端版本']));
            }
            return $this->returnAndSetError(new ErrorInfo(['code'=>'-1','message'=>'参数错误']));
        }
        if($this->version != 'v1.1'){
            return $this->returnAndSetError(new ErrorInfo(['code'=>'-1','message'=>'旧版已废弃，请更新客户端版本']));
        }
        $result = Follow::getByCompanyName($this->company_name);
        foreach ($result as &$item) {
            $item['customer_type'] = self::$typeList[intval($item['customer_type'])];
            $item['follow_status'] = self::$statusList[intval($item['follow_status'])];
        }
        return $result;
    }
}