<?php

require_once ROOT_PATH . '/app/models/ModelTask.php';


class ViewController extends ApplicationController{

	public function viewTaskAction(){
		$idTask = $_GET['id'];
		$ModelTask = new ModelTask();
		$getTask = $ModelTask->viewTask($idTask);
		$this->view->seeTask = $getTask;
	}

}
