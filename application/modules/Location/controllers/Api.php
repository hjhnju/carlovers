<?php
class ApiController extends Base_Controller_Api{
    
    public function writeAction(){
        $line = trim($_REQUEST['line']);        
        $arrTemp = explode(",",$line);
        $objLoc = new Location_Object_Location();
        $objLoc->fetch(array('id' => $arrTemp[0]-1));
        $objLoc->x = $arrTemp[1];
        $objLoc->y = $arrTemp[2];
        $objLoc->marked = 1;
        $objLoc->save();
    }
    
    public function readAction(){
        $listLoc = new Location_List_Location();
        $listLoc->setPagesize(PHP_INT_MAX);
        $listLoc->setOrder(1);
        $arrTemp = $listLoc->toArray();
        $arrRet = array();
        foreach ($arrTemp['list'] as $row){
            $arr['ind'] = $row['id'];
            $arr['loc'] = $row['loc'];
            $arr['dir'] = $row['dir'];
            $arr['des'] = $row['cross'];
            $arr['x']   = $row['x'];
            $arr['y']   = $row['y'];
            $arr['marked'] = $row['marked'];
            $arrRet[] = $arr;
        }
        return $this->ajax($arrRet);
    }
}