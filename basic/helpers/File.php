<?php
/**
 * 有关文件处理的方法，都整合到此文件
 * @author wangwx 2015-4-16
 */

namespace app\helpers;

class File{
	/**
	 * 判断本地是否有同名文件，如没有，按url下载
	 * @param string $dirPath 检查文件夹路径
	 * @param string $fileUrl 
	 * @return string filePath 下载本地路径
	 */
	public static function downFileForNotExist($dirPath,$fileUrl){
		if (empty($fileUrl)) {
			return null;
		}
		$fileArr = explode("/",$fileUrl);
		$fileName = end($fileArr);
		$filePath = $dirPath.$fileName;
		//判断本地文件是否被删除,如删除,需要下载到本地
		if (!is_file($filePath)) {
			self::saveRometeFile($dirPath, $fileName, $fileUrl);
			return $filePath;
		}
		return $filePath;
	}
	
	/**
	 * 保存远程文件
	 * @param string $savePath 保存路径 要以/结束 
	 * @param string $saveName 保存文件名称
	 * @param string $url 远程文件路径
	 * @return array|boolean
	 */
	public static function saveRometeFile($savePath,$saveName,$url){
		if (empty($url)) {
			return false;
		}
		try {
			$dataContent = self::httpGetData($url);
			$filename = $savePath.$saveName;
			$fp= @fopen($filename,"a"); //将文件绑定到流 
			fwrite($fp,$dataContent); //写入文件
			return true;
		} catch (\Exception $e) {
			return false;
		}
	}
	
	
	/**
	 * 获取Url文件流
	 * @param unknown $url
	 * @return string
	 */
	public static function httpGetData($url) {
		$ch = curl_init ();
		curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, 'GET' );
		curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt ( $ch, CURLOPT_URL, $url );
		ob_start ();
		curl_exec ( $ch );
		$return_content = ob_get_contents ();
		ob_end_clean ();
		$return_code = curl_getinfo ( $ch, CURLINFO_HTTP_CODE );
		return $return_content;
	}

    /**
     * 删除指定文件夹
     * @param $dir
     * @return bool
     */
    public static function delDir($dir){
        //先删除目录下的文件：
        $dh=opendir($dir);
        while ($file=readdir($dh)) {
            if($file!="." && $file!="..") {
                $fullpath=$dir."/".$file;
                if(!is_dir($fullpath)) {
                    unlink($fullpath);
                } else {
                    self::delDir($fullpath);
                }
            }
        }
        closedir($dh);
        //删除当前文件夹：
        if(rmdir($dir)) {
            return true;
        } else {
            return false;
        }
    }
}