<?php

require_once ROOT_PATH . '/app/models/ModelTask.php';

class IndexController extends ApplicationController{	

	public function indexAction(){
		$ModelTask = new ModelTask();
	    $content = $ModelTask->getTasks();
		$this->view->content = $content;
	}
}