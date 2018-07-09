<?php
/**
 * Created by PhpStorm.
 * User: zhangpf01
 * Date: 2017/9/20
 * Time: 14:32
 */

namespace app\helpers\error;


use Yii;
use yii\base\Object;

/**
 * Description of ErrorInfo
 *
 * @author tomas
 */
class ErrorInfo extends Object {

    /**
     * @var string 错误代码
     */
    public $code;

    /**
     * @var string 日志信息
     */
    public $logMessage;

    /**
     * @var string 错误信息,用于显示给用户
     */
    public $message;

    /**
     * @var ErrorInfo 内部错误信息
     */
    public $innerError;

    /**
     * 创始错误对象
     * @param string $errorCode
     * @param string $logMessage
     * @param string $message
     * @return ErrorInfo|object
     */
    public static function create($errorCode, $logMessage='', $message=''){
        return Yii::createObject(['class' => self::className(), 'code' => $errorCode, 'logMessage' => $logMessage, 'message'=> $message]);
    }

    public function init() {
        parent::init();
        if (empty($this->message)) {
            if (isset(ErrorCode::$errorMessage[$this->code])) {
                $this->message = ErrorCode::$errorMessage[$this->code];
            } else {
                $this->message = '服务器错误：无法获取错误代码('.$this->code.')的信息。';
            }
        }
    }

}