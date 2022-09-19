<?php

require_once ROOT_PATH . '/app/models/ModelTask.php';


class CreateController extends ApplicationController{

	public function addTaskAction(){
		if (!empty($_POST)) {

			$modeltask = new ModelTask();
			$modeltask->newTask($_POST["task"], $_POST["user"], $_POST["state"], $_POST["sdate"], $_POST["fdate"]);
		}

	}
}
