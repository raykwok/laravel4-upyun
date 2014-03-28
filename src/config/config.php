<?php
return array(
    /**
     * 又拍云空间名称
     */
    'bucket_name' => 'bucket_name',

    /**
     * 授权操作员账号
     */
    'username' => 'username',

    /**
     * 授权操作员密码
     */
    'password' => 'password',

    /**
     * 网络接入点
     * Upyun::ED_AUTO 根据网络条件自动选择接入点
     * Upyun::ED_TELECOM 电信接入点
     * Upyun::ED_CNC 联通网通接入点
     * Upyun::ED_CTT 移动铁通接入点
     */
    'end_point' => NULL,

    /**
     * 为请求超时时间
     */
    'timeout' => 30,
);