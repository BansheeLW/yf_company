<?php
/**
 * Created by PhpStorm.
 * User: banshee
 * Date: 2018/7/9
 * Time: 下午6:16
 */

namespace app\models;

use app\common\models\Follow;

class SearchForm extends BaseFormModel {

    public $name;
    public $password;
    public $company_name;

    const NAME = 'yf_company';
    const PASS = '123456';

    public function login(){
        if($this->name !== self::NAME || $this->$this->password !== self::PASS){
            return false;
        }
        return true;
    }

    public function getData(){
        $result = Follow::getByCompanyName($this->company_name);
        return $result;
    }
}