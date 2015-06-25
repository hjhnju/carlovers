<?php
$link=mysql_connect("xingjiaodai.mysql.rds.aliyuncs.com:3306","xingjiaodai","xingjiaodai");
if(!$link){
    echo "没有连接成功!";
    return 0;
}
mysql_select_db("carlovers", $link);
mysql_query("SET NAMES utf-8");
$sql = "select `loc`,`x`,`y`,`cross` from `location` where `marked` = 1";
$rs = mysql_query($sql);
$fp = fopen("result.csv","w");
fwrite($fp,"name,X,Y,telephone,cross\r\n");
while($row = mysql_fetch_array($rs))
{
   $row['cross'] = str_replace(",", "|", $row['cross']);
   $line = sprintf("%s,%s,%s,,%s\r\n",$row['loc'],$row['x'],$row['y'],trim($row['cross']));
   fwrite($fp,$line);
}
mysql_close($link);
fclose($fp);
