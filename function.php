<?php
/**
 * File: function.php
 * Created by Joao Rito on 27/02/18.
 * Last modified by Joao Rito on 27/02/18 13:58
 * https://github.com/joaorito/php_RenameKeys
 */


/***
 * Replace Keys from a object or array
 * @param $original = Original object or array (could be multidimensional)
 * @param $map = array of keys to search and replace (key = "search key", value = "new key")
 * @return array
 */

function replaceKey($original,$map=array())
{
    /** Create a temp var encoding object or array to json */
    $temp = json_encode($original);

    /** Loopint to replace keys on json */
    foreach ($map AS $k=>$v)
    {
        $temp = str_ireplace('"'.$k.'":','"'.$v.'":', $temp);
    }

    /** Default return is array format but if the original is a object return it in object */
    $array = true;

    if (is_object($original))
    {
        $array = false;
    }

    return json_decode($temp, $array);

}