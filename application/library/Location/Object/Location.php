<?php
/**
 * 
 * @author huwei
 */
class Location_Object_Location extends Base_Object {
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
     * 类名
     * @var string
     */
    const CLASSNAME = 'Location_Object_Location';

    /**
     * 对象包含的所有字段
     * @var array
     */
    protected $fields = array('id', 'zone', 'loc', 'dir', 'cross', 'x', 'y', 'marked');

    /**
     * 字段与属性隐射关系
     * @var array
     */
    public $properties = array(
        'id'      => 'id',
        'zone'    => 'zone',
        'loc'     => 'loc',
        'dir'     => 'dir',
        'cross'   => 'cross',
        'x'       => 'x',
        'y'       => 'y',
        'marked'  => 'marked',
    );

    /**
     * 整数类型的字段
     * @var array
     */
    protected $intProps = array(
        'id'      => 1,
        'marked'  => 1,
    );

    /**
     * @param array $data
     * @return Location_Object_Location
     */
    public static function init($data) {
        return parent::initObject(self::CLASSNAME, $data);
    }

    /**
     * 
     * @var integer
     */
    public $id;

    /**
     * 
     * @var string
     */
    public $zone;

    /**
     * 名称
     * @var string
     */
    public $loc;

    /**
     * 方向
     * @var string
     */
    public $dir;

    /**
     * 相交道路
     * @var string
     */
    public $cross;

    /**
     * 
     * @var 
     */
    public $x;

    /**
     * 
     * @var 
     */
    public $y;

    /**
     * 
     * @var integer
     */
    public $marked;

}
