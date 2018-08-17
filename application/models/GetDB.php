<?php
/**
 * Created by PhpStorm.
 * User: Chromium
 * Date: 2018/8/16
 * Time: 15:27
 */

class GetDB extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function  getSonglist()
    {
        $query = $this->db->get('songlist');
        return $query->result_array();
    }
}