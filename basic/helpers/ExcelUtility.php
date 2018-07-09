<?php

namespace app\helpers;

use PHPExcel;
class ExcelUtility {

    /**
     * 导出Excel
     * @param array  $headers Excel抬头
     * @param array  $data 数据
     * @param string $filename 文件名
     * @param array  $extras 额外信息,格式:[['',''],['','']]
     * @param string $auto_save 自动保存，1是自动保存
     * @param array  $columns 指定导出列
     * @return interger|boolean 返回写入字符串的长度。若出错，则返回 false
     */
    public static function Export($headers, $data, $filename, $extras = [],$columns = []) {
        $fp = fopen($filename, 'w');

        // 输出Excel额外信息
        if (isset($extras) && !empty($extras)) {
            foreach ($extras as $i => $v) {
                $extra = [];
                foreach ($v as $m => $n) {
                    $extra[$m] = $n;
                }
                // 将数据通过fputcsv写到文件句柄
                fputcsv($fp, $extra);
            }
        }

        // 输出Excel列名信息
        if (isset($headers) && !empty($headers)) {
            // 将数据通过fputcsv写到文件句柄
            fputcsv($fp, $headers);
        }

        // 计数器
        $cnt = 0;
        // 每隔$limit行，刷新一下输出buffer，不要太大，也不要太小
        $limit = 100000;

        if (isset($data) && !is_array($data) && !is_object($data)) {
            fputcsv($fp, $data);
            return;
        } else if (is_object($data)) {
            fputcsv($fp, get_class($data));
            return;
        }

        // 逐行取出数据，不浪费内存
        $count = count($data);
        if($count==0){
            return false;
        }
        for ($t = 0; $t < $count; $t++) {

            $cnt++;
            if ($limit == $cnt) { //刷新一下输出buffer，防止由于数据过多造成问题
                ob_flush();
                flush();
                $cnt = 0;
            }
            $row[] = $data[$t];
            $rowTmp = [];
            foreach ($row as $i => $v) {
                $cells = $v;
                if (is_array($v)) {
                    //如果指定了导出列，则只导出指定的列，且按指定列的顺序导出
                    if (isset($columns) && !empty($columns)) {
                        foreach ($columns as $j => $col) {
                            $tmpVal = '';
                            if (array_key_exists($col, $v)) {
                                $tmpVal = $v[$col];
                            }
                            $rowTmp[$j] = $tmpVal;
                        }
                    } else {
                        foreach ($cells as $j => $cell) {
                            //如果指定了导出列，则只导出指定的列
                            if (isset($columns) && !empty($columns) && !in_array($j, $columns)) {
                                continue;
                            }
                            if (is_string($cell)) {
                                $rowTmp[$j] = $cell;
                            } else if (is_array($cell)) {
                                $rowTmp[$j] = implode(',', $cell);
                            } else {
                                $rowTmp[$j] = $cell;
                            }
                        }
                    }
                } else if (is_object($v)) {
                    $rowTmp[$i] = get_class($v);
                } else {
                    $rowTmp[$i] = $v;
                }
            }
            $result = fputcsv($fp, $rowTmp);
            unset($rowTmp);
            unset($row);
        }
        return $result;
    }
    /**
     * 直接输出csv
     * @param string $filename 文件名
     * @param array  $header Excel抬头
     * @param array  $data 数据
     * @param array  $explain 说明栏，默认为空
     * @return bool
     */
    public static function export_csv($filename,$header,$data, $explain=[]) {
        header("Content-type:text/csv");
        header("Content-Disposition:attachment;filename=".$filename);
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Expires:0');
        header('Pragma:public');
        $result='';
        if(is_array($explain) && !empty($explain)){
            foreach ($explain as $val){
                $result .= $val."\n";
            }
        }
        if (isset($header) && !empty($header)) {
            $result.=implode(',',$header)."\n";
        }
        if(isset($data) && !empty($data)){
            foreach ( $data as $row) {
                $result.=implode(',',$row)."\n";
            }
        }
        echo iconv("utf-8","gbk//IGNORE",$result);
        return true;
    }

    public static function importDataByFilePath($filePath,$startRow){
        require_once dirname(__FILE__) . '/../vendor/phpoffice/phpexcel/Classes/PHPExcel.php';
        $PHPReader = new \PHPExcel_Reader_Excel2007();
        if(!$PHPReader->canRead($filePath)){
            $PHPReader = new \PHPExcel_Reader_Excel5();
            if(!$PHPReader->canRead($filePath)){
                return false;
            }
        }
        $PHPExcel = $PHPReader->load($filePath);
        $currentSheet = $PHPExcel->getSheet(0);//读取第一个工作表
        $allColumn = $currentSheet->getHighestColumn();//取得最大的列号
        $allRow = $currentSheet->getHighestRow();//取得一共有多少行
        /**从第二行开始输出，因为excel表中第一行为列名*/
        $arr=array();
        for($currentRow = $startRow;$currentRow <= $allRow;$currentRow++){
            /**从第A列开始输出*/
            for($currentColumn= 'A';($currentColumn<= $allColumn || strlen($currentColumn) < strlen($allColumn)); $currentColumn++){
                $val = $currentSheet->getCell($currentColumn.$currentRow)->getValue();
                /*ord()将字符转为十进制数*/
                /**如果输出汉字有乱码，则需将输出内容用iconv函数进行编码转换，如下将gb2312编码转为utf-8编码输出*/
                //判断如果是公式，则先取计算后的结果
                if (strpos($val, '=') === 0) {
                    $val = $currentSheet->getCell($currentColumn . $currentRow)->getCalculatedValue();
                }

                $arr[$currentRow][]=  trim($val);
            }
        }
        return $arr;
    }

    /**
     * 直接输出xls
     * @param string $filename
     * @param PHPExcel $phpExcel
     */
    public static function export_xls($filename, $phpExcel) {
        require_once dirname(__FILE__) . '/../vendor/phpoffice/phpexcel/Classes/PHPExcel.php';
        $objWriter = new \PHPExcel_Writer_Excel5($phpExcel);
        ob_end_clean();
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.ms-execl");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        self::encodeFilename($filename . '.xls');
        header("Content-Transfer-Encoding:binary");
        //ob_clean();
        $objWriter->save('php://output');
        exit;
    }


    /**
     * 对文件名编码，兼容浏览器
     * @param  string $filename
     * @return void
     */
    public static function encodeFilename($filename)
    {
        $encoded_filename = urlencode($filename);
        $encoded_filename = str_replace("+", "%20", $encoded_filename);
        $ua = $_SERVER["HTTP_USER_AGENT"];
        if (preg_match("/MSIE/", $ua)) {
            header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
        } else if (preg_match("/Firefox/", $ua)) {
            header('Content-Disposition: attachment; filename*="utf8\'\'' . $filename . '"');
        } else {
            header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
        }
    }

    public static function loadFile($filePath)
    {
        require_once dirname(__FILE__) . '/../vendor/phpoffice/phpexcel/Classes/PHPExcel.php';
        $PHPReader = new \PHPExcel_Reader_Excel2007();
        if(!$PHPReader->canRead($filePath)){
            $PHPReader = new \PHPExcel_Reader_Excel5();
            if(!$PHPReader->canRead($filePath)){
                return false;
            }
        }
        $PHPExcel = $PHPReader->load($filePath);
        return $PHPExcel;
    }

    /**
     * 直接输出xlsx
     * @param string $filename
     * @param PHPExcel $phpExcel
     */
    public static function export_xlsx($filename, $phpExcel) {
        require_once dirname(__FILE__) . '/../vendor/phpoffice/phpexcel/Classes/PHPExcel.php';
        $objWriter = new \PHPExcel_Writer_Excel2007($phpExcel);
        ob_end_clean();
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        self::encodeFilename($filename . '.xlsx');
        header("Content-Transfer-Encoding:binary");
        //ob_clean();
        $objWriter->save('php://output');
        exit;
    }
}
