<?php
/**
 * Created by PhpStorm.
 * User: Chromium
 * Date: 2018/8/16
 * Time: 11:41
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Chartinfo extends CI_Controller{
    public function index(){
        $this->load->view('chartinformation');
        $this->load->helper('url');
    }
}