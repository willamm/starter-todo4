<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Views extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['pagetitle'] = 'Ordered TODO List';
		$this->data['pagebody'] = 'template_secondary';
		$tasks = $this->tasks->all();
		$this->data['content'] = 'Ok';
		$this->data['leftside'] = 'by_priority';
		$this->data['rightside'] = 'by_category';

		$this->render('template_secondary'); 
	}

}
