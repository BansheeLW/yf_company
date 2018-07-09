<?php

namespace app\helpers;

use Yii;
use yii\base\Model;
use yii\helpers\Json;

/**
 * AjaxResult 是Ajax接口的Jason返回值模型
 */
class AjaxResult extends Model
{

    /**
     * 获取一个需要登录的Ajax接口的Json字符串
     */
    public static function getNeedLogin() {
        self::json('', (object)['code'=>'-999','message'=>'未登录']);
    }

    /**
     * 公用json格式化方法
     * @param string $data 数据
     * @param \app\helpers\error\ErrorInfo $errorInfo 错信息
     * @return string
     */
    public static function json($data, $errorInfo = null) {
    	header('Content-type: application/json; charset=UTF-8');
    	if (empty($errorInfo)) {

    		$r_data ['retCode'] = '0';
    		$r_data ['retMsg'] = "";
    		$r_data ['data'] = $data;
    	} else {
    		$r_data ['retCode'] = $errorInfo->code;
    		$r_data ['retMsg'] = $errorInfo->message;
    		$r_data ['data'] = $data;
                try{
                    \Yii::error(Json::encode($errorInfo), 'resultError');
                } catch (\Exception $ex) {
                    // do Nothing todo log System application error info    
                }
    	}

    	echo Json::encode ( $r_data );

        exit();
    }


    /**
     * 检测是否Post提交
     */
    public static function exitIfNotPost() {
    	if (! Yii::$app->request->isPost) {
    		$errorInfo = new \stdClass();
    		$errorInfo->code = '-1';
    		$errorInfo->message = "请求方法错误";
    		AjaxResult::json("", $errorInfo);
    	}
    }

    /**
     * 参数有误输出错误
     */
    public static function errorParam() {
    	$errorInfo = new \stdClass();
    	$errorInfo->code = '-2';
    	$errorInfo->message = "请求参数有误";
    	AjaxResult::json("", $errorInfo);
    }

    /**
     * 服务器出错输出
     * @param null $exception
     */
    public static function errorService($exception = NULL) {
    	$errorInfo = new \stdClass();
    	$errorInfo->code = '-3';
    	$errorInfo->message = "网络异常,请稍后再试!";
        if(!is_null($exception)){
            $errorInfo->logMessage = (string)$exception;
        }
    	AjaxResult::json("", $errorInfo);
    }

}
    
  