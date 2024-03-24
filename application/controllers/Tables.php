<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

        public function index (){
                $this->template->load('template', 'tables');
        }
}
