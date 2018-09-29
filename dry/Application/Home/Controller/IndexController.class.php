<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		// print_r($_GET);exit;
		// $Images = D("Images"); // 实例化User对象
		$this->redirect('Goods/index');
		// $this->display();
	}

    public function excel($x = '1',$y = 'C',$sheet = '1')//输出表格指定位置信息  $X 行 $y 列  $sheet 表格页数
    {
        date_default_timezone_set("Etc/GMT");
        date_default_timezone_set("Asia/Shanghai");
        vendor('PHPExcel.PHPExcel.IOFactory');
//        var_dump(substr($_SERVER['SCRIPT_FILENAME'],0,-9).'Public');

        $reader_class = new \PHPExcel_IOFactory(); //设置以Excel5格式(Excel97-2003工作簿)
        $reader = $reader_class->createReader('Excel2007'); //设置以Excel5格式(Excel97-2003工作簿)
        $FILE = substr($_SERVER['SCRIPT_FILENAME'],0,-9).'Public'."/1.xlsx";
        $PHPExcel = $reader->load($FILE); // 载入excel文件
        $sheet = $PHPExcel->getSheet($sheet); // 读取第一個工作表
        $highestRow = $sheet->getHighestRow(); // 取得总行数
        $highestColumm = $sheet->getHighestColumn(); // 取得总列数

        /** 循环读取每个单元格的数据 */
        for ($row = 1; $row <= $highestRow; $row++){//行数是以第1行开始
            if ($row == $x)
            {
                for ($column = 'A'; $column <= $highestColumm; $column++)
                {//列数是以A列开始
                    if ($column == $y)
                    {
                        $dataset[] = $sheet->getCell($column.$row)->getValue();
                        echo $sheet->getCell($column.$row)->getValue();
                    }

                }

            }
        }
    }
}