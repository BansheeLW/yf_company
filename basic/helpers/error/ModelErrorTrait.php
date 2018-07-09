<?php
/**
 * Created by PhpStorm.
 * User: zhangpf01
 * Date: 2017/9/22
 * Time: 8:05
 */

namespace app\helpers\error;


/**
 * 模型错误信息获取
 *
 * @property-read string $allFirstErrorMessage 获取Model的所有错误字段的firstError的信息,以';'分隔
 * @property-read string $firstErrorMessage 获取Model第一个错误字段的firstError的信息
 *
 * @author tomas
 */
trait ModelErrorTrait {
    /**
     * @return string 获取Model的所有错误字段的firstError的信息,以';'分隔
     */
    public function getAllFirstErrorMessage(){
        if(empty($this->errors)){
            return '';
        }
        return implode(';', $this->firstErrors);
    }

    /**
     * @return string 获取Model第一个错误字段的firstError的信息
     */
    public function getFirstErrorMessage(){
        if(empty($this->errors)){
            return '';
        }
        return array_values($this->firstErrors)[0];
    }
}