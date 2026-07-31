<?php 

    class Task{
        public $title = 'Estudar';
        public $description = 'Estudar para a prova';
        public $completed = false;
        
        public function markAsCompleted(){
            $this->completed = true;
        }
        
        public function markAsIncomplete(){
            $this->completed = false;
        }
        
        public function getTitle(){
            
            return $this->title;
        }
        
        public function getDescription(){
            return $this->description;
        }
        
        public function isCompleted(){
            if($this->completed == true){
                return true;
            }
            else {
                return false;
            }
        }
    }

    $task = new Task();

    echo $task->getTitle() ."<br>";
    echo $task->getDescription() ."<br>";
    $task->markAsIncomplete();
    $task->isCompleted() ."<br>";


?>