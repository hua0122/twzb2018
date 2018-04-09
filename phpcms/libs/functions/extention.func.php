<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
 /**
* V9推荐位时间排序类
* @
* @access public
* @param array $list 查询结果
* @param string $field 排序的字段名
* @param string $sortby 排序类型 （asc正向排序 desc逆向排序 nat自然排序）
* @return array
*2016-06-24 by winnerzyy QQ75526510
*/
if (! function_exists('list_sort_by'))
{
    function list_sort_by($list, $field, $sortby = 'asc')
    {
        if (is_array($list))
        {
            $refer = $resultSet = array();
            foreach ($list as $i => $data)
            {
                $refer[$i] = &$data[$field];
            }
            switch ($sortby)
            {
                case 'asc': // 正向排序
                    asort($refer);
                    break;
                case 'desc': // 逆向排序
                    arsort($refer);
                    break;
                case 'nat': // 自然排序
                    natcasesort($refer);
                    break;
            }
            foreach ($refer as $key => $val)
            {
                $resultSet[] = &$list[$key];
            }
            return $resultSet;
        }
        return false;
    }
}
?>