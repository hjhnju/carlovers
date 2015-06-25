<?php
$link=mysql_connect("xingjiaodai.mysql.rds.aliyuncs.com:3306","xingjiaodai","xingjiaodai");
if(!$link){
    echo "没有连接成功!";
    return 0;
}
mysql_select_db("carlovers", $link);
mysql_query("SET NAMES utf-8");
$file = file("data.csv");
foreach ($file as $line){
    $temp = explode(",",$line);
    $sql  = "insert into `location` (`id`,`zone`,`loc`,`dir`,`cross`) values(";
    $sql .= "\"".$temp[0]."\",\"";
    $sql .= $temp[1]."\",\"";
    $sql .= $temp[2]."\",\"";
    $sql .= $temp[3]."\",\"";
    $sql .= $temp[5];
    if(isset($temp[6]) && strlen($temp[6]) > 2){        
        for($i=6; $i<count($temp); $i++){
            $sql .= ",".$temp[$i];
        }
        $sql .= "\");";
    }else{
        $sql .= "\");";
    }
    mysql_query($sql);
}