<?php 

namespace App\Controller;
use Config\Config;

require_once "../../Config/Config.php";

class Controlle {
    public function save($query){

        $result = mysqli_query(Config::conexao(), $query);

        return $result;
        
    }
    public function upload($imagem = []){

        $caminho = dirname(__DIR__, 2);
        $diretorio = 'imagens_teleatendimento/';
        $img_success = 0;
        $img_error = 0;
        $imagens = array();
        
        if(file_exists($caminho."/".$diretorio) == true){

            for($controle = 0; $controle < count($imagem['arquivos']['name']); $controle++){
                
                // echo $imagem['arquivos']['name'][$controle];
                $destino = $caminho."/".$diretorio.$imagem['arquivos']['name'][$controle];
                
                if( move_uploaded_file($imagem['arquivos']['tmp_name'][$controle], $destino) ){
                    $img_success++;
                    array_push($imagens, $destino);
                }else{
                    $img_error++;
                }
            }
            
            return $imagens;
        

        }else{
            echo "Diretorio não existe";

        }
    } //Fim da function upload
}