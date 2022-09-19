<?php

class ModelTask extends Model{

	private $datason;

	public function __construct(){
		$this->datason = file_get_contents("../data.json");
	}

	public function getTasks(){

		$tasks = json_decode($this->datason, true);
		return $tasks;
	}

	public function viewTask($id){

		$tasks = json_decode($this->datason, true);
		foreach ($tasks as $key => $task) {
			if ($task['id'] == $id) {
				$taskToView = ($tasks[$key]);
				return $taskToView;
			}
		}

	}

	public function newTask($task, $user, $state, $sdate, $fdate){

		$tasks = json_decode($this->datason, true);
			if ($tasks != NULL) {
				$getLastArray = end($tasks);
				$getID = current($getLastArray);
				$newId = ++$getID;
			} else {
	   			$newId = 1; 
			}

		$tasksNew = array('id' => $newId, 'task' => $task, 'user' => $user, 'state' => $state, 'sdate' => $sdate, 'fdate' => $fdate);
		if ($tasks != NULL) {
			array_push($tasks, $tasksNew);
			$json = json_encode($tasks,JSON_PRETTY_PRINT);
		} else {
	 		$json = json_encode([$tasksNew],JSON_PRETTY_PRINT);

		}
			file_put_contents("../data.json", $json);
			return header("Location: ../web/" );
	}

	public function removeTask($id){

		$tasks = json_decode($this->datason, true);
		foreach ($tasks as $key => $task) {
			if ($task['id'] == $id) {
				unset($tasks[$key]);
			}
		}

		$json = json_encode($tasks,JSON_PRETTY_PRINT);
		file_put_contents("../data.json", $json);
		return header("Location: ../web/" );
	}

	public function editTask($id){

		$tasks = json_decode($this->datason, true);
		foreach ($tasks as $key => $task) {
			if ($task['id'] == $id) {
				$taskToEdit = ($tasks[$key]);

				return $taskToEdit;

			}
		}

	}


	public function updateTask($id, $task, $user, $state, $sdate, $fdate){

		$tasks = json_decode($this->datason, true);
		foreach ($tasks as $key => $value) { 
            if ($value['id'] == $id) { 
                if(isset($task)){ 
                    $tasks[$key]['task'] = $task; 
                } 
                if(isset($user)){ 
                    $tasks[$key]['user'] = $user; 
                } 
                if(isset($state)){ 
                    $tasks[$key]['state'] = $state; 
                } 
                if(isset($sdate)){ 
                    $tasks[$key]['sdate'] = $sdate; 
                } 
                if(isset($fdate)){ 
                    $tasks[$key]['fdate'] = $fdate; 
                } 
            } 
        } 

			$json = json_encode($tasks,JSON_PRETTY_PRINT);
			file_put_contents("../data.json", $json);
			return header("Location: ../web/" );

	}
}
