<?php 
class TaskController {

    private $model;

    public function __construct (Model $model) {
        $this->model = $model;

    } 

    public function add ($Task) {
        return $model->insert($Task);
         
    } 

    public function get () {
       return $model->getAllTask($Task);

    }

    public function delete() {
       return $model->delete($Task);

    }

    public function update() {
        return $model->update($Task);
 
     }




}