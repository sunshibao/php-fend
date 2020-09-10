<?php
namespace Fend\Exception;

/**
 * 用于中途终止代码使用
 * 并且附带要输出内容
 * 为什么不用swoole的？因为FPM下不一定装
 *
 * Class ExitException
 * @package Fend\Exception
 */
class ExitException extends \Exception
{

    private $data = "";

    public function __construct($data)
    {
        parent::__construct("", 0, null);
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }
}