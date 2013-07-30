<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');




if (! function_exists('pretty_print'))
{
    function pretty_print($object , $title = '' , $isMarkup = false)
    {
        if ($isMarkup == FALSE)
        {
            echo "<pre>";
            print_r($object);
            echo "</pre>";
        }
        else
        {
            echo htmlspecialchars($object);
        }

    }
}


if (! function_exists('hello_time'))
{
    function hello_time()
    {
    	$h = date('G');

        if ( $h < 11 )
        {
            return '早上好';
        }
        else if ( $h < 13 )
        {
            return '中午好';
        }
        else if ( $h < 17 )
        {
            return '下午好';
        }
        else
        {
            return '晚上好';
        }
    }

}



?>
