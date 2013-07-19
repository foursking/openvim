<?php
/*=============================================================================
#     FileName: tips_model.php
#   CreateTime: 2013-07-11 19:10:28
#       Author: yifeng@leju.com
#   LastChange: 2013-07-11 19:10:28
=============================================================================*/

class Tips_model extends CI_Model {

 	private $_tables = array(
        'tips' => 'tips',
		'tags_relationships'   => 'tags_relationships',
		'tags' => 'tags',
	);


    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
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


        $querySql = $this->db->get('tips' , $offset, $num);


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


        /**
         *  SQL
         *
         *  SELECT a.tagsId, COUNT(a.tagsId) AS tagsCount,b.tagsName
         *  FROM op_tags_relationships AS a join op_tags as b
         *  On a.tagsId = b.tagsId
         *  GROUP BY a.tagsId
         *  ORDER BY tagsCount DESC
         *  LIMIT 0 , $num
         */


        $Ram = $this->db->select("a.tagsId,count(a.tagsId) as tagsCount,b.tagsName")
                        ->from("{$this->_tables['tags_relationships']} as a")
                        ->join("{$this->_tables['tags']} as b" , "a.tagsId = b.tagsId")
                        ->group_by("a.tagsId")
                        ->order_by("tagsCount" , "desc")
                        ->limit($num)
                        ->get()
                        ->result_array();

        return $Ram;

    }



    public function show_tips_detail($tipsId = '')
    {


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

    public function count_tips_all()
    {
        $Ram = $this->db->count_all($this->_tables['tips']);
        return $Ram;
    }


}




?>
