<?php
require_once __DIR__ . '/../models/tarefa.php';

class tarefaController{
    private $tarefaModel;

    public function __construct(){
        $this->tarefaModel = new Tarefas();
    }

    public function criar(){
        if(isset($_POST['descricao']) && !empty(trim($_POST['descricao']))){
            $this->tarefaModel->criar($_POST['descricao']);
        }

        header("Location: index.php");
    }

    public function excluir(){

        if(isset($_GET['delete'])){
            $this->tarefaModel->excluir($_GET['delete']);
        }

        header("Location: index.php");
    }

    public function index(){
        $tarefa = $this->tarefaModel->listar();
        include __DIR__ . '/../views/listar';
    }

    public function editar(){
        if(isset($_POST['descricao']) && !empty(trim($_POST['descricao'])) && isset($_POST['id'])){
            $this->tarefaModel->editar($_POST['descricao'], $_POST['id']);
        }
        header("Location: index.php");
    }
}
?>