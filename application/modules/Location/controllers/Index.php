<?php
/**
 * @author huwei
 */
class IndexController extends Base_Controller_Page {
    public function init(){ 
        $this->setNeedLogin(false);
        parent::init();
    }
    
    /** 
     */
    public function indexAction() {    
    }
}