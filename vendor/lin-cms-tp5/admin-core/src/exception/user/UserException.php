<?php
/**
 * Created by PhpStorm.
 * User: daogu
 * Date: 2017/5/29
 * Time: 23:50
 */

namespace LinCmsTp5\admin\exception\user;

use LinCmsTp5\exception\BaseException;

class UserException extends BaseException
{
    public $code = 404;
    public $msg = '账户不存在';
    public $error_code = '20000';
}