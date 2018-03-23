<?php
/**
 * Created by PhpStorm.
 * User: Nikko
 * Date: 23/03/2018
 * Time: 22:16
 */
class Ctrl_Home extends CI_Controller
{
	public function index()
	{
		$this->load->view('Home');
	}
}
