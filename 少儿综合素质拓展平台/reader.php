<?php

        require_once 'teacherService.php';
        header("Content-Type:text/html;charset=utf-8");
        $upoad_file=$_FILES['file1']['tmp_name'];
        $move_to_file=$_SERVER['DOCUMENT_ROOT']."/Stu3.0/up/".$_FILES['file1']['name'];
        move_uploaded_file($upoad_file, $move_to_file);//将文件上传到新位置
        $dir=dirname(__FILE__);//获得文件所在目录
        require_once $dir.'/PHPExcel/PHPExcel/IOFactory.php';//读取类文件
        $filename=$dir."/up/".$_FILES['file1']['name'];//选定要读取的文件
        $filetype=PHPExcel_IOFactory::identify($filename);
        $objReader=PHPExcel_IOFactory::createReader($filetype);
        $sheetname=array("problem");
        $objReader->setLoadSheetsOnly($sheetname);
        $objPHPExcel=$objReader->load($filename);

        //$objPHPExcel=PHPExcel_IOFactory::load($filename);
       /* 

       $sheetCount=$objPHPExcel->getSheetCount();
        for($i=0;$i<$sheetCount;$i++){
        	$data=$objPHPExcel->getSheet($i)->toArray();
        	print_r($data);
        }*/
        
        $data="";
        foreach($objPHPExcel->getWorkSheetIterator() as $sheet){//循环取sheet
         $highestRow=$sheet->getHighestRow(); // 取得总行数
         $highestColumm=$sheet->getHighestColumn(); // 取得总列数
         $highestColumm=PHPExcel_Cell::columnIndexFromString($highestColumm); //字母列转换为数字列 如:AA变为27
        	foreach ($sheet->getRowIterator() as $row) {
            
        		foreach ($row->getCellIterator() as $cell) {
             

        		    $data=$data.$cell->getValue()."/";//获取单元格数据
                



        		}
        		
        		
        	}
        	
        }
       
      $content=array();
      $content=explode("/",$data);
      for($i=18;$i<$highestRow*$highestColumm;$i=$i+18){
        AddItemToMysql($content[$i],$content[$i+1],$content[$i+2],$content[$i+3],$content[$i+4],$content[$i+5],$content[$i+6],$content[$i+7],$content[$i+8],$content[$i+9],$content[$i+10],$content[$i+11],$content[$i+12],$content[$i+13],$content[$i+14],$content[$i+15],$content[$i+16],$content[$i+17]);
      }




        
      ?>