<?php
include_once '/guestbooktwo/aplication/models/model_Registration.php';
class   Controller_Registration extends Controller {
    public function __construct() {
        $this->model = new Model_Registration();
        $this->view = new View();
    }
    
    function actionAdd(){
     $data =  $this->model->addUserDB($_POST['userName'], $_POST['userPassword'], $_POST['reUserPassword'],$_POST['userEmeil']);
        $this->view->generate('reg_view.php', 'template_view.php', $data);
      
    }
    function actionInput(){
        $data   =   $this->model->inputUser($_POST['userName'], $_POST['userPassword']);
        $this->view->generate('input_view.php','template_view.php',$data);
        echo $data;
    }
    
}