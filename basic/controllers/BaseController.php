<?php
/**
 * Created by PhpStorm.
 * User: banshee
 * Date: 2018/7/9
 * Time: 下午6:07
 */

namespace app\controllers;

use yii\web\Controller;
use app\helpers\AjaxResult;

class BaseController extends Controller{
    /**
     * 关闭跨站点请求伪造数据校验
     * @var
     */
    public $enableCsrfValidation = false;

    protected function roleAuthRules() {
        return [];
    }

    /**
     * 获取客户端IP地址
     * @return string
     */
    private function getClientIP()
    {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
        if(!$ip){
            $ip = $_SERVER["REMOTE_ADDR"];
        }
        return $ip;
    }

    /**
     * 获取服务器IP
     * @return string
     */
    public function getHostIp()
    {
        $hostIp = getenv('HOST_IP');
        if (!$hostIp) {
            $hostIp = $_SERVER['SERVER_ADDR'];
        }
        return $hostIp;
    }

    /**
     * 公用json格式化方法
     * @param string | array $data 数据
     * @param null $errorInfo
     * @return string
     * @internal param string $status 错误码
     * @internal param string $message 错误信息
     */
    public function json($data, $errorInfo = null) {
        return AjaxResult::json($data, $errorInfo);
    }

    /**
     * 检测是否Post提交
     */
    protected function exitIfNotPost() {
        AjaxResult::exitIfNotPost();
    }

    /**
     * 参数有误输出错误
     */
    protected function errorParam() {
        AjaxResult::errorParam();
    }

    /**
     * 服务器出错输出
     */
    protected function errorService() {
        AjaxResult::errorService();
    }


}