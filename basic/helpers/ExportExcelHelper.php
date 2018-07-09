<?php

namespace app\helpers;

use PHPExcel;
use PHPExcel_Writer_Excel5;
use PHPExcel_Worksheet;
use PHPExcel_Style_Alignment;

/**
 * 以Excel的格式导出数据工具类
 * @author yangxs
 */
class ExportExcelHelper {

    /**
     * 导出excel
     * @param array $header 头部信息
     *  eg：[['title'=>'项目名称','width'=>20,'h_align'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER,'v_align'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER]
     * ,['title'=>'地址','width'=>30,'h_align'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER,'v_align'=>PHPExcel_Style_Alignment::HORIZONTAL_CENTER]]
     * @param array $body excel数据信息（需要和头部数据对应） eg：[['project_name'=>'四季花城','address'=>'深圳市宝安区']]
     * @param string $fileName 导出文件名称
     * @param string $sheetTitle sheet名称
     * @param int $isVersion7
     */
    public static function export($header, $body, $fileName, $sheetTitle = 'sheet1', $isVersion7 = 0) {
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        $sheet = $objPHPExcel->getActiveSheet();
        $sheet->setTitle($sheetTitle);
        self::setHeader($sheet, $header);
        self::setBody($sheet, $body);
        self::exportBrowser($objPHPExcel, $fileName, $isVersion7);

    }

    private static function setHeader(PHPExcel_Worksheet $sheet, $header) {
        $columnIndex = 'A';
        foreach ($header as $columnInfo) {
            $sheet->getColumnDimension($columnIndex)->setWidth($columnInfo['width']);
            $sheet->getStyle($columnIndex)->getAlignment()->setHorizontal(empty($columnInfo['h_align'])?PHPExcel_Style_Alignment::HORIZONTAL_CENTER:$columnInfo['h_align']);
            $sheet->getStyle($columnIndex)->getAlignment()->setVertical(empty($columnInfo['v_align'])?PHPExcel_Style_Alignment::VERTICAL_BOTTOM:$columnInfo['v_align']);
            if(isset($columnInfo['number_format'])) {
                $sheet->getStyle($columnIndex)->getNumberFormat()->setFormatCode($columnInfo['number_format']);
            }
            $sheet->setCellValue($columnIndex . '1', $columnInfo['title']);
            $columnIndex++;
        }
    }

    private static function setBody(PHPExcel_Worksheet $sheet, $body) {
        $rowIndex = 2;
        foreach ($body as $rowInfo) {
            $columnIndex = 'A';
            foreach ($rowInfo as $cellValue) {
                $cell = $sheet->getCell($columnIndex . $rowIndex);
                if ($cell->getStyle()->getNumberFormat()->getFormatCode() == \PHPExcel_Style_NumberFormat::FORMAT_TEXT) {
                    $cell->setValueExplicit($cellValue);
                } else {
                    $cell->setValue($cellValue);
                }
                $columnIndex++;
            }
            $rowIndex++;
        }
    }

    /**
     * 导出兼容浏览器
     * @param PHPExcel $objPHPExcel
     * @param  string $filename
     * @param int $isVersion7
     * @return void
     */
    private static function exportBrowser(PHPExcel $objPHPExcel, $filename, $isVersion7) {
        $suffix = $isVersion7 ? '.xlsx' : '.xls';
        $contentType = $isVersion7 ? 'vnd.openxmlformats-officedocument.spreadsheetml.sheet' : 'vnd.ms-execl';
        $objWriter = $isVersion7 ?  new \PHPExcel_Writer_Excel2007($objPHPExcel) : new PHPExcel_Writer_Excel5($objPHPExcel);
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
        header("Content-Type:application/force-download");
        header("Content-Type:application/".$contentType);
        header("Content-Type:application/octet-stream");
        header("Content-Type:application/download");
        $encoded_filename = str_replace("+", "%20", urlencode($filename .$suffix));
        $ua = $_SERVER["HTTP_USER_AGENT"];
        if (preg_match("/MSIE/", $ua)) {
            header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
        } else if (preg_match("/Firefox/", $ua)) {
            header('Content-Disposition: attachment; filename*="utf8\'\'' . $filename . '"');
        } else {
            header('Content-Disposition: attachment; filename="' . $encoded_filename . '"');
        }
        // header('Content-Disposition:attachment;filename="经纪人个人排行榜 个人拓客数量 --明细列表.xls"');
        header("Content-Transfer-Encoding:binary");
        $objWriter->save('php://output');
    }

}
