<?php if ( ! defined('APP_NAME')) exit('No direct script access allowed');

/**************************************************************************
 * Grace web development framework for PHP 5.1.2 or newer
 *
 * @author      陈佳(chinkei) <cj1655@163.com>
 * @copyright   Copyright (c) 2012-2013, 陈佳(chinkei)
 **************************************************************************/

/**
 * 配置文件解析接口
 * 
 * @anchor  陈佳(chinkei) <cj1655@163.com>
 * @package Config
 */
interface Grace_Configure_Interface
{
	public function setPath($path);
	public function read($key);
}
?>