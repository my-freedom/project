<?php
    error_reporting(0);
 
    class SqlHelper{
        public $conn;
        public $dbname="project";
        public $username="root";
        public $password="";
        public $host="localhost";
        
        public function __construct(){
            $this->conn=mysql_connect($this->host,$this->username,$this->password);
            if(!$this->conn){
                die("连接失败".mysql_error());
            }
            mysql_select_db($this->dbname,$this->conn);
        }
        public function execute_td($sql){//判断某个表中是否存在某个字段
             mysql_query("set names utf8");
             $test =  mysql_query($sql,$this->conn) or die(mysql_error()); 

        }
        public function execute_alter($sql){//往已经建好的表里添加新的字段
                mysql_query("set names utf8");
                mysql_query($sql,$this->conn) or die(mysql_error());
        }
        public function execute_dql($sql){
            mysql_query("set names utf8");
            $res=mysql_query($sql,$this->conn) or die(mysql_error());
           
            return $res;
        }
        public function execute_dql2($sql){
            $arr=array();
            $i=0;
            $res=mysql_query($sql,$this->conn) or die(mysql_error());
            while($row=mysql_fetch_assoc($res)){
                $arr[$i++]=$row;//数组是一维的
            }
            mysql_free_result($res);

            return $arr;
        }
        
        public function execute_dml($sql){
          
            $b=mysql_query($sql,$this->conn);
            if(!$b){
                return 0;
            }else{


                if($row=mysql_affected_rows($this->conn)>0){
                    return 1;
                }else{


                    return 2;
                }
            }
           
        }
        //分页
        public function execute_dql_fenye($sql1,$sql2,$fenyepage){
            $res=mysql_query($sql1) or die(mysql_error());
            $arr=array();
            while($row=mysql_fetch_assoc($res)){
                $arr[]=$row;
            }
            mysql_free_result($res);
            $res=mysql_query($sql2,$this->conn) or die(mysql_error);
            if($row=mysql_fetch_row($res)){
                $pagecount=ceil($row[0]/$fenyepage->pagesize);
                $fenyepage->rowcount=$row[0];
                $fenyepage->pagecount=$pagecount;
            }
            mysql_free_result($res);
            
            
            if($fenyepage->pagenow>1){
               
                $prepage=$fenyepage->pagenow-1;
                $nativegate="<a href='{$fenyepage->gotoUrl}?pagenow=$prepage'>上一页</a>&nbsp";//相当于一个字符串
            }
             
            if($fenyepage->pagenow<$fenyepage->pagecount){
                $nextpage=$fenyepage->pagenow+1;
             
                $nativegate.="<a href='{$fenyepage->gotoUrl}?pagenow=$nextpage'>下一页</a>&nbsp";
            }
           
            
            
            

            $page_whole=10;
            $start=floor(($fenyepage->pagenow-1)/$page_whole)*$page_whole+1;
          
            $index=$start;
          

            if($fenyepage->pagenow>$page_whole){
                 $nativegate.="&nbsp;&nbsp;<a href='{$fenyepage->gotoUrl}?pagenow=".($start-1)."'>&nbsp;&nbsp;<<&nbsp;&nbsp;</a>";
            }
            for(;$start<$index+$page_whole;$start++){
            //出来那10个标签，这地方还有问题
                if($start>$fenyepage->pagecount){
                    break;
                }else{

                $nativegate.="<a href='{$fenyepage->gotoUrl}?pagenow=$start'>[$start]</a>";

                }
            }

            $nativegate.="&nbsp;&nbsp;<a href='{$fenyepage->gotoUrl}?pagenow=$start'>&nbsp;&nbsp;>>&nbsp;&nbsp;</a>";
            $nativegate.="第$fenyepage->pagenow/共{$fenyepage->pagecount}页";
          
            
            $fenyepage->res_array=$arr;
            $fenyepage->nativegate=$nativegate;
            
            
        }
        public function OnlyNativegate($fenyepage){
            $fenyepage->pagecount=ceil($fenyepage->rowcount/$fenyepage->pagesize);
            if($fenyepage->pagenow>1){

                $prepage=$fenyepage->pagenow-1;
                $nativegate="<a href='{$fenyepage->gotoUrl}?pagenow=$prepage&button=1'>上一页</a>&nbsp";//相当于一个字符串
            }

            if($fenyepage->pagenow<$fenyepage->pagecount){
                $nextpage=$fenyepage->pagenow+1;

                $nativegate.="<a href='{$fenyepage->gotoUrl}?pagenow=$nextpage&button=1'>下一页</a>&nbsp";
            }





            $page_whole=10;
            $start=floor(($fenyepage->pagenow-1)/$page_whole)*$page_whole+1;

            $index=$start;


            if($fenyepage->pagenow>$page_whole){
                $nativegate.="&nbsp;&nbsp;<a href='{$fenyepage->gotoUrl}?pagenow=".($start-1)."'>&nbsp;&nbsp;<<&nbsp;&nbsp;</a>";
            }
           for(;$start<$index+$page_whole;$start++){
                //出来那10个标签，这地方还有问题
                if($start>$fenyepage->pagecount){
                    break;
                }else{

                    $nativegate.="<a href='{$fenyepage->gotoUrl}?pagenow=$start&button=1'>[$start]</a>";

                }
            }

            $nativegate.="&nbsp;&nbsp;<a href='{$fenyepage->gotoUrl}?pagenow=$start&button=1'>&nbsp;&nbsp;>>&nbsp;&nbsp;</a>";
            $nativegate.="第$fenyepage->pagenow/共{$fenyepage->pagecount}页";



            $fenyepage->nativegate=$nativegate;

        }
        public function close_connect(){
            if(!empty($this->conn)){
                mysql_close($this->conn);
            }
        }
        
    }
?>