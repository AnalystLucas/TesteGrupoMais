<?php

namespace Config;

use Config\Db;

require_once "Db.php";

class Config {

    public static function conexao(){

        // $link = mysqli_connect("localhost", "root", "", "teste_lucas");
        $conexao = mysqli_connect(Db::$host, Db::$user, Db::$password, Db::$dbname);
        
        if($conexao == true){
            return $conexao;
            // echo "Conexao ok !";
        }else{
            echo "Erro: Não foi possivel conectar ao banco";
        }
        
    }
}