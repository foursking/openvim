<?php
/*=============================================================================
#     FileName: tips_model.php
#   CreateTime: 2013-07-11 19:10:28
#       Author: yifeng@leju.com
#   LastChange: 2013-07-11 19:10:28
=============================================================================*/

class Tips_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }


    public function append_tags()
    {
        $string = file_get_contents(base_url() . "/public/tmp/vimbits_json.json");
        $vimbits_array = json_decode($string , true);
        $vimbits_tags = array();
        foreach ($vimbits_array as $key=>$value)
        {
            $vimbits_array[$key]['vimbits_tag'] = $vimbits_array[$key]['vimbits_tag'];
            $vimbits_array[$key]['vimbits_title'] = addslashes($vimbits_array[$key]['vimbits_title'][0]);
            $vimbits_array[$key]['vimbits_tips']  = addslashes($vimbits_array[$key]['vimbits_tips']);
            $vimbits_tags = array_merge($vimbits_array[$key]['vimbits_tag'] , $vimbits_tags);
        }


        $tagsName = '';

        $vimbits_tags = array_flip(array_flip($vimbits_tags));

        foreach ($vimbits_tags as $$key=>$value)
        {
            $tagsName .= "('".$value."'),";
        }

        $tagsName = rtrim($tagsName , ',');

        $insertSql = "INSERT INTO `op_tags`(tagsName) VALUES".$tagsName;

        $this->db->query($insertSql);
    }

    public function append_tags_relationship()
    {
        $querySql = $this->db->query("SELECT * FROM `op_tags`");

        $tagsRelationship = array();

        foreach ($querySql->result_array() as $key=>$value)
        {
            $tagsRelationship[$key] = $value['tagsName'];
        }

        $string = file_get_contents(base_url() . "/public/tmp/vimbits_json.json");
        $vimbits_array = json_decode($string , true);
        $vimbits_tips= array();
        foreach ($vimbits_array as $key=>$value)
        {
            $vimbits_tips[$key]['tipsTitle']   = $value['vimbits_title'][0];
            $vimbits_tips[$key]['tipsContent'] = $value['vimbits_tips'];
            $vimbits_tips[$key]['tipsCtime']   = date("Y-m-d H:i:s");
            $vimbits_tips[$key]['tipsUtime']   = date("Y-m-d H:i:s");
        }

        $this->db->insert_batch('tips' , $vimbits_tips);
        //        $data = array();
        //
        //        $i = 0;
        //        foreach ($vimbits_tags as $key=>$value)
        //        {
        //            if (empty($value))
        //            {
        //                continue;
        //            }
        //
        //            foreach ($value as $k=>$v)
        //            {
        //                foreach ($v as $sk=>$sv)
        //                 {
        //                    $data[$i]['tipsId'] = $key + 1;
        //                    $data[$i]['tagsId'] = $tagsRelationship[$sv] + 1;
        //                    $i +=1;
        //                 }
        //            }
        //
        //            $i +=1;
        //        }
        //
        //        #$this->db->insert_batch('tags_relationships' , $data);
        //
    }

    /**
	 * 获取VimTips概括
	 * @param int $num tips数量
	 * @param int $offset 分页数
	 * @return array
	 */

    public function show_tips_generalize($num , $offset)
    {

        $zodiac = array(
            'Ram'      => 'Aries',
            'Bull'     => 'Taurus',
            'Twins'    => 'Gemini',
            'Crab'     => 'Cancer',
            'Lion'     => 'Leo',
            'Virgin'   => 'Virgo',
            'Balance'  => 'Libra',
            'Scorpion' => 'Scorpio',
            'Archer'   => 'Sagittarius',
            'Goat'     => 'Capricorn',
            'Bearer'   => 'Aquarius',
            'Fishes'   => 'Pisces'
        );


        $querySql = $this->db->get('tips' , $num , $offset);
        $Ram = $querySql->result_array();

        $tipsId = '';

        foreach ($Ram as $key=>$value)
        {
            $tipsId .= $value['tipsId'] . ',';
        }

        $tipsId = rtrim($tipsId , ',');
        $querySql = $this->db->query("SELECT * FROM `op_tags_relationships` WHERE tipsId IN ({$tipsId})");

        $Bull = $querySql->result_array();

        foreach ($Bull as $key=>$value)
        {
            $tagsId[] = $value['tagsId'];
        }

        $tagsId = implode(',' , array_flip(array_flip($tagsId)));

        $querySql = $this->db->query("SELECT * FROM `op_tags` WHERE tagsId IN ({$tagsId})");

        $Twins = $querySql->result_array();

        foreach ($Twins as $key=>$value)
        {
            $tagsName[$value['tagsId']] = $value['tagsName'];
        }

        foreach ($Ram as $key=>$value)
        {
            foreach ($Bull as $k=>$v)
            {
                if ($v['tipsId'] == $value['tipsId'])
                {
                    $Ram[$key]['tags'][$v['tagsId']] = $tagsName[$v['tagsId']];
                }
                else
                {
                    continue;
                }
            }
        }
        return $Ram;
    }

    /**
     * 获取VimTips最热标签
     * @param int $num 最热标签数
     * @return array
     */
    public function show_top_tags($num = 7)
    {
        $querySql = $this->db->query("SELECT tagsId, COUNT( tagsId ) AS tagsCount FROM  `op_tags_relationships` GROUP BY tagsId ORDER BY tagsCount DESC LIMIT 0 , $num");
        $Ram = $querySql->result_array();
        $tagsId = '';
        foreach ($Ram as $key=>$value)
        {
            $tagsId .= $value['tagsId'] . ',';
        }

        $tagsId = rtrim($tagsId , ',');
        $querySql = $this->db->query("SELECT * FROM `op_tags` WHERE tagsId IN ({$tagsId})");

        $Bull = $querySql->result_array();

        for ($i = 0; $i < count($Ram); $i++)
        {
            $Twins[$i] = array_merge($Ram[$i] , $Bull[$i]);
        }
        return $Twins;
    }


    public function show_tips_detail($tipsId = '')
    {
        $zodiac = array(
            'Ram'      => 'Aries',
            'Bull'     => 'Taurus',
            'Twins'    => 'Gemini',
            'Crab'     => 'Cancer',
            'Lion'     => 'Leo',
            'Virgin'   => 'Virgo',
            'Balance'  => 'Libra',
            'Scorpion' => 'Scorpio',
            'Archer'   => 'Sagittarius',
            'Goat'     => 'Capricorn',
            'Bearer'   => 'Aquarius',
            'Fishes'   => 'Pisces'
        );


        $Ram = $this->db->select("a.tipsId , a.tipsUid , a.tipsTitle , a.tipsContent , a.tipsCtime , a.tipsUtime")
            ->from("op_tips as a")
            ->where('a.tipsId' , 128)
            ->get()
            ->row_array();

        $tipsId = $Ram['tipsId'];

        $querySql = $this->db->query("SELECT * FROM `op_tags_relationships` WHERE tipsId IN ({$tipsId})");

        $Bull = $querySql->result_array();

        foreach ($Bull as $key=>$value)
        {
            $tagsId[] = $value['tagsId'];
        }

        $tagsId = implode(',' , array_flip(array_flip($tagsId)));

        $querySql = $this->db->query("SELECT * FROM `op_tags` WHERE tagsId IN ({$tagsId})");

        $Twins = $querySql->result_array();

        foreach ($Twins as $key=>$value)
        {
            $tagsName[$value['tagsId']] = $value['tagsName'];
        }


        foreach ($Bull as $k=>$v)
        {
            if ($v['tipsId'] == $Ram['tipsId'])
            {
                $Ram['tags'][$v['tagsId']] = $tagsName[$v['tagsId']];
            }
            else
            {
                continue;
            }
        }

        return $Ram;
    }




}




?>
