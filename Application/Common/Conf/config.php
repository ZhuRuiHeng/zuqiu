<?php
return array(
	//'配置项'=>'配置值'
	/* 1、数据库配置信息
	 */
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => '127.0.0.1', // 服务器地址
	'DB_NAME'   => 'ftdata', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '123456', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'gds_', // 数据库表前缀
	'DB_CHARSET'            =>  'utf8',
	'DATA_CACHE_TYPE'=>'file',//设置缓存方式为file    
	'DATA_CACHE_TIME'=>'600',//缓存周期600秒 
	
	'DB_PARAMS'    =>    array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL),
	
     
 //邮件配置
 'THINK_EMAIL' => array(
    'SMTP_HOST'   => 'smtp.163.com', //SMTP服务器
    'SMTP_PORT'   => '465', //SMTP服务器端口
    'SMTP_USER'   => 'edisonht@163.com', //SMTP服务器用户名
    'SMTP_PASS'   => 'liuchishenzhen88', //SMTP服务器密码
    'FROM_EMAIL'  => 'edisonht@163.com', //发件人EMAIL
    'FROM_NAME'   => 'iwash', //发件人名称
    'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
    'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
 ),
 
);