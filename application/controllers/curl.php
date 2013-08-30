<?php


class Curl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('comments_model');
    }




    public function index()
    {
        $ch = curl_init();

        $result = array();


        $tabname = 'qitafood';


        for ($i = 0; $i < 51 ; $i++)
        {
            $url = "http://www.dianping.com/search/category/98/10/g252p$i";

            curl_setopt($ch , CURLOPT_URL , $url);
            curl_setopt($ch , CURLOPT_HEADER , false);
            curl_setopt($ch , CURLOPT_RETURNTRANSFER , 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
            curl_setopt($ch , CURLOPT_REFERER , 'http://www.dianping.com');
            curl_setopt($ch,10018,'Googlebot/2.1 (+http://www.google.com/bot.html)');
            $curl_get = curl_exec($ch);


            $pattern_shopname = '~data-hippo-type="shop"\s*target="_blank">([^<]+)</a>~is';
            $pattern_content = '~<li class="address">\s*<strong>地址:</strong>(<a\s*href="/search/category/98/0/([a-z0-9]+)"\s*class="Black-H">([\x{4e00}-\x{9fa5}]+)</a>)*([^<]+)</li>~u';
            $pattern_price = '~<span class="Price">¥</span>([0-9\s]*)</strong>~is';

            $shopname = $content = array();

            preg_match_all($pattern_shopname , $curl_get, $shopname);
            preg_match_all($pattern_content , $curl_get, $content);


            $j = 0;

            foreach ($content[4] as $key=>$value)
            {

                $_tmp = explode("&nbsp;&nbsp;" , $value);
                $result[($i*15)+$j]['shopname'] = $shopname[1][$j];
                $result[($i*15)+$j]['location'] = $_tmp[0];
                $result[($i*15)+$j]['phone'] = $_tmp[1];
                $j++;
            }




        }


       $this->comments_model->shop_insert($tabname , $result);

        echo $tabname;


    }




}



?>
