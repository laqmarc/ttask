<?php

require_once ROOT_PATH . '/app/models/ModelTask.php';


class UpdateController extends ApplicationController{

	public function editTaskAction(){

		$idTask = $_GET['id'];
		$ModelTask = new ModelTask();
		$getTask = $ModelTask->editTask($idTask);
		$this->view->editTask = $getTask;
		if (!empty($_POST)) {
			$ModelTask->updateTask($_GET["id"],$_POST["task"], $_POST["user"], $_POST["state"], $_POST["sdate"], $_POST["fdate"]);
		}
	}

}
