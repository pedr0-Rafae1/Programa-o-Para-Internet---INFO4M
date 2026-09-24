<?php

require_once __DIR__ . '/../config/database.php';

class Tarefas{
    private $conn;
    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function criar($descricao){
        $descricao = $this-> conn-> real_escape_string($descricao);
        $sql = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";
        return $this -> conn -> query($sql);
    }

    public function excluir($id){
        $id = intval($id);
        $sql = "DELETE FROM tarefas WHERE id = ?";
        return $this -> conn -> query($sql);
    }

    public function listar(){
        $tarefa = [];
        $sql = "SELECT * FROM tarefas ORDER BY data_criacao DESC";
        $resultado = $this -> conn -> query($sql);

        if( $resultado -> num_rows > 0){

            while($row = $resultado -> fetch_assoc()){
                $tarefa[] = $row;
            }

        return $tarefa;

        }
    }

    public function editar($descricao, $id){
        $id= intval($id);
        $descricao = $this->conn->real_escape_string($descricao);
        $sql = "UPDATE 'tarefas SET descricao = '$descricao' WHERE id = '$id'";
        return $this->conn->query($sql);
    }
};