<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Member extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('form');

        $this->auth = new stdClass;
        $this->load->library('flexi_auth');

        if (!$this->flexi_auth->is_logged_in_via_password() || $this->flexi_auth->get_user_group_id() != 1) {
            $this->flexi_auth->set_error_message('You must login as an member to access this area.', TRUE);
            $this->session->set_flashdata('message', $this->flexi_auth->get_messages());
            redirect('auth');
        }

        $this->data = null;
    }

    function index() {
        $this->dashboard();
    }

    function account() {
        echo "Logged in as Member !";
        die();
    }

}
