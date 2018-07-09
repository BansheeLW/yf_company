<?php
/**
 * Created by PhpStorm.
 * User: zhangpf01
 * Date: 2017/9/22
 * Time: 8:04
 */

namespace app\helpers\error;


/**
 * 用于返回并设置错误信息的特性s
 *
 * @author tomas
 */
trait ReturnErrorTrait {
    /**
     *
     * @var ErrorInfo 错误信息
     */
    public $errorInfo;

    /**
     * 返回false 并设置错误信息:
     * 1.当前方法发现错误,使用 `returnAndSetError($error, $logMessage, $errorMessage = '')` 返回错误信息,
     *     如果在ErrorCode类中配置了错误代码对应的错误信息,可以不传递 `$errorMessage`；
     * 2.如果调用方法发现错误,可以直接使用被调用类的错误信息 `returnAndSetError($model->errorInfo)`,
     *     如果传递了 `$logMessage` 或 `$errorMessage`,将覆盖原有值.
     * @param string|ErrorInfo $error 错误信息类或错误代码
     * @param string $logMessage 日志信息
     * @param string $errorMessage 错误信息
     * @return boolean
     */
    public function returnAndSetError($error, $logMessage = '', $errorMessage = ''){

        if(is_null($error)){
            return true;
        }

        $config = [
            'logMessage' => $logMessage,
            'message' => $errorMessage,
        ];

        if($error instanceof ErrorInfo){
            $config['innerError'] = $error;
            $config['code'] = $error->code;
            if(empty($logMessage)){
                $config['logMessage'] = $error->logMessage;
            }

            if(empty($errorMessage)){
                $config['message'] = $error->message;
            }
        }else{
            $config['code'] = $error;
        }

        $this->errorInfo = new ErrorInfo($config);

        return false;
    }

}