<?php
include_once '/../models/model_Messages.php';
class Controller_Messages extends Controller {

    public function __construct() {
        $this->model = new Model_Messages();
        $this->view = new View();
    }

    function actionMain() {
        $this->view->generate('main_view.php', 'template_view.php', $data);
    }

    function actionWrite() {

        $data = $this->model->writeDB($_POST['name'], $_POST['fulltext']);
                $this->view->generate('write_view.php', 'template_view.php', $data);
    }

    function actionMess() {

        $data = $this->model->readDB();
        $this->view->generate('read_view.php', 'template_view.php', $data);
    }

    function actionDel() {
        $data = $this->model->delDB($_GET['id']);
        echo $data;
        $this->view->generate('delete_view.php', 'template_view.php', $data);
    }

    function actionUpdate() {
       $data = $this->model->updateDB($_GET['idU']);
       $this->view->generate('update_view.php', 'template_view.php', $data);
       $dd    = $this->model->updateWriteDB($_POST['name'],$_POST['fulltext'],$_GET['idU']);
            }
    function actionReg()    {
        $this->view->generate('reg_view.php', 'template_view.php', $data);
    }
    
    

}