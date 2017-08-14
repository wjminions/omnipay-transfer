<?php
namespace Omnipay\Transfer;

/**
 * Class Helper
 * @package Omnipay\Transfer
 */
class Helper
{
    public static function getSignByDataAndKey($data, $key)
    {
        $query_string = self::getQueryString($data);

        return strtoupper(md5($query_string . $key));
    }

    public static function getQueryString($data)
    {
        ksort($data);

        return http_build_query($data);
    }
}