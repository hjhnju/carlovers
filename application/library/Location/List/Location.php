<?php
/**
 *  列表类
 * @author huwei
 */
class Location_List_Location extends Base_List {
    /**
     * 数据表名
     * @var string
     */
    protected $table = 'location';

    /**
     * 主键
     * @var string
     */
    protected $prikey = 'id';

    /**
     * 对象包含的所有字段
     * @var array
     */
    protected $fields = array('id', 'zone', 'loc', 'dir', 'cross', 'x', 'y', 'marked');

    /**
     * 整数类型的字段
     * @var array
     */
    protected $intProps = array(
        'id'      => 1,
        'marked'  => 1,
    );

    /**
     * 获取数据的对象数组
     * @return array|Location_Object_Location[]
     * 返回的是一个数组，每个元素是一个Loan_Object_Attach对象
     */
    public function getObjects() {
        return parent::getObjects('Location_Object_Location');
    }

}