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

    const NAME = 'yf_company';
    const PASS = 'wujia1314';




    public function rules()
    {
        return [
            [['name','password', 'company_name'], 'string'],
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
            return $this->returnAndSetError(new ErrorInfo(['code'=>'-1','message'=>'参数错误']));
        }
        $result = Follow::getByCompanyName($this->company_name);
        return $result;
    }
}