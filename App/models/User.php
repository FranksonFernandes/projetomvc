<?php

use App\Core\Model;

class User extends Model {

    public $nome;
    public $email;
    public $senha;

    public function save(){

        $sql = "INSERT INTO user (NOME, EMAIL, SENHA) VALUES (?,?,?)";
        $stmt = Model::getConn()->prepare($sql); 
        $stmt->bindValue(1, $this->nome); 
        $stmt->bindValue(2, $this->email);
        $stmt->bindValue(3 , $this->senha);

        if($stmt->execute()){
            return "Cadastrado com sucesso!";
        }

        else{
            return "Erro ao cadastrar!";
        }
    }
}