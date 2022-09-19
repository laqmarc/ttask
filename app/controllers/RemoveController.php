<?php

require_once ROOT_PATH . '/app/models/ModelTask.php';


class RemoveController extends ApplicationController{

	public function removeAction(){
		$id = $_GET['id'];
		$ModelTask = new ModelTask();
		$ModelTask->removeTask($id);
	}

}
