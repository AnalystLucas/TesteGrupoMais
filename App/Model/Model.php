<?php

namespace App\Model;

use App\Controller\Controlle;
use App\Model\ModelTabelas;
use Config\Config;

require_once "ModelTabelas.php";
require_once "../Controller/Controlle.php";

class Model {

    public function insert($dados = [], $arquivos = []){

        #Montando a query para enviar para o banco recebendo o $_POST e $_FILES
        #Após a primeira interação não colocar novamento o começo da query e o primeiro value do $_POST
        $interacao = true;
        $string_query = "INSERT INTO `".ModelTabelas::$cadastro."` VALUES (null,";

        foreach($dados as $key => $value){
            
            if($interacao == true){
                $interacao = false;
                $string_query .= "'$value'";
            }else{
                $string_query .= ", '$value'";
            }
        }
        
        #Verificando se os $_FILES não estava vazio
        #Porém com jquery foi feito a validação para não deixar enviar o formulario se não for passado nenhum arquivo
        if($arquivos !== null){
            $upload = Controlle::upload($arquivos);

            if(count($upload) > 0){

                #finalizando a query pegando o nome dos arquivos enviados e para salvar no banco caso necessário alguma consulta futura 
                #para ser mostrar as imagens de cada cliente em entrou em contato.
                foreach($upload as $keys => $values){
                    $string_query .= ", '$values'"; 
                }
                $string_query .= ")";

                // echo $string_query;

                if(Controlle::save($string_query)){
                    echo "Dados Cadastrados";
                }else{
                    echo "Não foi possivel cadastrar, Verificar se todos os campos do formulario estão preenchido corretamente, caso seja do sexo masculino gestação, cesaria e chance de estar gravida serão desabilidato";
                }
            }else{
                echo "Erro Upload";
            }

        }else{
            echo "Nenhuma Imagem Enviada";
        }

    }
}