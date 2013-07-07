<?php


ob_start();
echo 'start fetch';
ob_flush();

$ch = curl_init();

$j = 0;





for ($i = 1; $i < 500; $i++)
{

$vimbits_notips_array = array(1, 2, 3, 4, 5, 6, 7, 13, 14, 18, 26, 27, 29, 31, 32, 33, 34, 35, 36, 37, 38, 39, 48, 49, 50, 55, 59, 60, 61, 62, 63, 66, 67, 68, 69, 70, 71, 72, 73, 74, 76, 77, 80, 81, 83, 88, 92, 108, 118, 120, 124, 125, 127, 128, 130, 141, 142, 143, 146, 151, 154, 156, 160, 161, 165, 167, 169, 184, 187, 188, 197, 201, 205, 210, 225, 226, 235, 243, 244, 246, 248, 250, 251, 253, 255, 258, 259, 264, 265, 270, 271, 273, 274, 276, 277, 278, 280, 283, 284, 312, 321, 322, 325, 331, 335, 336, 337, 339, 345, 353, 372, 373, 376, 380, 385, 388, 398, 405, 406, 407, 409, 410, 411, 418, 419, 424, 430, 440, 441, 443, 446, 459, 460, 461, 467, 468, 469, 470, 471, 472, 473, 474, 475, 476, 477, 478, 479, 480, 481, 482, 483, 484, 485, 486, 487, 488, 489, 490, 491, 492, 493, 494, 495, 496, 497, 498, 499);



    if (in_array($i , $vimbits_notips_array))
    {
        continue;
     }

    $url = "http://www.vimbits.com/bits/$i";
    curl_setopt($ch , CURLOPT_URL , $url);
    curl_setopt($ch , CURLOPT_HEADER , false);
    curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
    $curl_get = curl_exec($ch);


    $pattern_title = "/<div class='title'>\s*<span>\s*([a-zA-Z&;\s\/\-\_]+)\s*<\/span>/is";
    $pattern_tag   = "/<a class='label label-info tag' href='\/bits\?tag=[a-z]+'>\s([a-zA-Z]+)*\s<\/a>/is";
    $pattern_tips  = "/<pre class='prettyprint linenums'>\s*([a-zA-Z&;\s\-\_=\$\^\*\"!:\.\W\w]+)\s*<\/pre>/is";
    preg_match_all($pattern_title ,$curl_get, $res);
    $pattern_result['title'] = $res[1];
    if (empty($pattern_result['title']))
    {
        echo "vimbits $i no tips<br/>";
        ob_flush();
         continue;
     }
    preg_match_all($pattern_tag,$curl_get, $res);
    $pattern_result['tag'] = $res[1];
    preg_match_all($pattern_tips,$curl_get, $res);
    $pattern_result['tips'] = $res[1][0];
    $vimtips[$j]['vimbits_id'] = $i;
    $vimtips[$j]['vimbits_title'] = $pattern_result['title'];
    $vimtips[$j]['vimbits_tag']   = $pattern_result['tag'];
    $vimtips[$j]['vimbits_tips']  = $pattern_result['tips'];
    $j += 1;
    ob_flush();
}

echo "<pre>";
print_r($vimtips);
echo "</pre>";



$vimtips_json = json_encode($vimtips);

echo $vimtips_json;

if (!file_exists("vimbits_json.txt"))
{
    echo 'file not exits';
}
else
{
    $fileRes = fopen("vimbits_json.txt" , "w");
    fwrite($fileRes , $vimtips_json);
    fclose($fileRes);
}





?>
