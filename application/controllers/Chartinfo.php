<?php
/**
 * Created by PhpStorm.
 * User: Chromium
 * Date: 2018/8/16
 * Time: 11:41
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Chartinfo extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('GetDB');
        $this->load->helper('url_helper');
    }

    public function index(){

        $data['songs'] = $this->GetDB->getSonglist();

        $this->load->view('chartinformation',$data);
        $this->load->helper('url');

    }
}