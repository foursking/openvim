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



?>
