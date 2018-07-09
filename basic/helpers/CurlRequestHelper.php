<?php
/**
 * Created by PhpStorm.
 * User: zhangpf01
 * Date: 2017/9/22
 * Time: 11:25
 */

namespace app\helpers;



/**
 * CurlRequestHelper
 *
 * @author yangxs
 */
class CurlRequestHelper {

    /**
     * 发送get请求
     * @param string $url 请求地址
     * @param array $queryArray 请求的查询字串数据数组
     * @param bool $jsonResult 返回值是否进行json反序列化
     * @return mixed
     */
    public static function sendGetRequest($url, $queryArray = null, $jsonResult = true) {
        $curl = new Curl();
        $curl->setOption(CURLOPT_SSL_VERIFYPEER, false);
        $curl->setOption(CURLOPT_SSL_VERIFYHOST, false);
        if (is_array($queryArray) && !empty($queryArray)) {
            $queryString = http_build_query($queryArray);
            if(strpos($url,'?')===false){
                $url.='?'.$queryString;
            }else{
                $url.='&'.$queryString;
            }
        }
        $response = $curl->get($url);
        return $jsonResult ? json_decode($response, true) : $response;
    }

    /**
     * 发送post请求
     * @param string $url 请求地址
     * @param array $postData post的数据
     * @param bool $jsonResult 返回值是否进行json反序列化
     * @param bool $buildQuery 参数是否build
     * @return mixed
     */
    public static function sendPostRequest($url, $postData, $jsonResult = true,$buildQuery=true) {
        $curl = new Curl();
        if (is_array($postData)) {
            if($buildQuery){
                $postData = http_build_query($postData);
            }else{
                $postData = json_encode($postData);
            }
        }
        $curl->setOption(CURLOPT_SSL_VERIFYPEER, false);
        $curl->setOption(CURLOPT_SSL_VERIFYHOST, false);
        $response = $curl->setOption(CURLOPT_POSTFIELDS, $postData)->post($url);
        return $jsonResult ? json_decode($response, true) : $response;
    }

    /**
     * 发送post请求
     * @param string $url 请求地址
     * @param array $postData post的数据
     * @param bool $jsonResult 返回值是否进行json反序列化
     * @return object
     */
    public static function sendPostRequestNoEncode($url, $postData, $jsonResult = true) {
        $curl = new Curl();
        $curl->setOption(CURLOPT_SSL_VERIFYPEER, false);
        $curl->setOption(CURLOPT_SSL_VERIFYHOST, false);
        $curl->setOption(CURLOPT_HEADER, FALSE); //CURLOPT_HEADER：设为1，则在返回的内容里包含http header；0不包含
        $curl->setOption(CURLOPT_POSTFIELDS, http_build_query($postData));
        $response = $curl->post($url);
        return $jsonResult ? json_decode($response, true) : $response;
    }

}