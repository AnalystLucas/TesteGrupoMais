<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tele Consulta</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    
    <div class="container">
        <form id="form_agendar" method="POST" action="../Model/ModelFormulario.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome"><strong>Nome completo *</strong></label>
                <input class="form-control" id="nome" type="text" name="nome">
            </div>
            
            <div class="form-group">
                <label for="idade"><strong>Idade</strong></label>
                <input class="form-control" id="idade" type="text" name="idade">
            </div>

            <div class="form-group">
                <label for="data_nascimento"><strong>Data Nascimento</strong></label>
                <input class="form-control" id="data_nascimento" type="text" name="data_nascimento" placeholder="  /  /  ">
            </div>
            
            <div class="group-check">

                <label for=""><strong>Sexo:</strong></label>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="masculino" name="masculino" value="masculino">
                    <label class="form-check-label" for="masculino">Masculino</label>
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="feminino" name="feminino" value="feminino">
                    <label class="form-check-label" for="feminino">Feminino</label>
                </div>
                
            </div>
            
            <div class="form-group">
                <label for="peso"><strong>Peso</strong></label>
                <input class="form-control" id="peso" type="text" name="peso">
            </div>
            
            <div class="form-group">
                <label for="altura"><strong>Altura</strong></label>
                <input class="form-control" id="altura" type="text" name="altura">
            </div>

            <div class="form-group">
                <label for="rg"><strong>RG</strong></label>
                <input class="form-control" id="rg" type="text" name="rg">
            </div>
            
            <div class="form-group">
                <label for="cpf"><strong>CPF</strong></label>
                <input class="form-control" id="cpf" type="text" name="cpf">
            </div>
            
            <div class="form-group">
                <label for="endereco"><strong>Endereço Completo</strong></label>
                <input class="form-control" id="endereco" type="text" name="endereco">
            </div>
            
            <div class="form-group">
                <label for="cidade"><strong>Cidade</strong></label>
                <input class="form-control" id="cidade" type="text" name="cidade">
            </div>
            
            <div class="form-group">
                <label for="cep"><strong>CEP</strong></label>
                <input class="form-control" id="cep" type="text" name="cep">
            </div>
            
            <div class="form-group">
                <label for="telefone_comercial"><strong>Telefone Comercial</strong></label>
                <input class="form-control" id="telefone_comercial" type="text" name="telefone_comercial">
            </div>
            
            <div class="form-group">
                <label for="telefone_celular"><strong>Telefone Celular *</strong></label>
                <input class="form-control" id="telefone_celular" type="text" name="telefone_celular">
            </div>
            
            <div class="form-group">
                <label for="telefone_residencial"><strong>Telefone Residencial</strong></label>
                <input class="form-control" id="telefone_residencial" type="text" name="telefone_residencial">
            </div>
            
            <div class="form-group">
                <label for="email"><strong>E-mail *</strong></label>
                <input class="form-control" id="email" type="email" name="email">
            </div>

            <div class="group-check">

                <label for=""><strong>Motivo da Consulta:</strong></label>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="mamoplastia" name="mamoplastia" value="Mamoplastia">
                    <label class="form-check-label" for="mamoplastia">Mamoplastia</label>
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="protese_mama" name="protese_mama" value="Protese de Mama">
                    <label class="form-check-label" for="protese_mama">Prótese de Mama</label>
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="abdomen" name="abdomen" value="Abdomen">
                    <label class="form-check-label" for="abdomen">Abdomen</label>
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="lipo" name="lipo" value="Lipo">
                    <label class="form-check-label" for="lipo">Lipo</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="palpebra" name="palpebra" value="Palpebra">
                    <label class="form-check-label" for="palpebra">Palpebra</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="orelha" name="orelha" value="Orelha">
                    <label class="form-check-label" for="orelha">Orelha</label>
                </div>

            </div>

            <div class="group-check">

                <label for=""><strong>Gestações:</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="gestacao_check_sim" name="gestacao_check_sim" value="sim">
                    <label class="form-check-label" for="gestacao_check_sim">Sim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="gestacao_check_nao" name="gestacao_check_nao" value="nao">
                    <label class="form-check-label" for="gestacao_check_nao">Não</label>
                </div>

                <div class="form-group form-check" hidden>
                    <input type="checkbox" class="form-check-input" id="sem_informar_gestacao" name="sem_informar_gestacao" value="N/P Gestacoes">
                    <label class="form-check-label" for="sem_informar_gestacao">Não Precisa Informar</label>
                </div>

            </div>

            <div class="form-group">
                <label for="gestacao_caso_sim"><strong>Caso a resposta anterior for "SIM" Diga quantas gestações</strong></label>
                <input class="form-control" id="gestacao_caso_sim" type="text" name="gestacao_caso_sim">
            </div>

            <div class="form-group">
                <label for="gestacao_data_ultimo_parto"><strong>Caso a resposta anterior for "SIM" Data ultimo parto?</strong></label>
                <input class="form-control" id="gestacao_data_ultimo_parto" type="text" name="gestacao_data_ultimo_parto">
            </div>

            <div class="group-check">

                <label for=""><strong>Cesária</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="cesaria_sim" name="cesaria_sim" value="sim">
                    <label class="form-check-label" for="cesaria_sim">Sim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="cesaria_nao" name="cesaria_nao" value="nao">
                    <label class="form-check-label" for="cesaria_nao">Não</label>
                </div>

                <div class="form-group form-check" hidden>
                    <input type="checkbox" class="form-check-input" id="sem_informar_cesaria" name="sem_informar_cesaria" value="N/P Cesaria">
                    <label class="form-check-label" for="sem_informar_cesaria">Não Precisa Informar</label>
                </div>

            </div>

            <div class="group-check">

                <label for=""><strong>Cirurgias Anteriores</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="cirurgia_anterior_sim" name="cirurgia_anterior_sim" value="sim">
                    <label class="form-check-label" for="cirurgia_anterior_sim">Sim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="cirurgia_anterior_nao" name="cirurgia_anterior_nao" value="nao">
                    <label class="form-check-label" for="cirurgia_anterior_nao">Não</label>
                </div>

            </div>

            <div class="form-group">
                <label for="cirurgia_caso_sim"><strong>Caso a resposta anterior for "SIM" Diga quantas?</strong></label>
                <input class="form-control" id="cirurgia_caso_sim" type="text" name="cirurgia_caso_sim">
            </div>

            <div class="group-check">

                <label for=""><strong>Já teve alguma complicação com Anestesia?</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="complicacao_anestesia_sim" name="complicacao_anestesia_sim" value="sim">
                    <label class="form-check-label" for="complicacao_anestesia_sim">Sim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="complicacao_anestesia_nao" name="complicacao_anestesia_nao" value="nao">
                    <label class="form-check-label" for="complicacao_anestesia_nao">Não</label>
                </div>

            </div>

            <div class="form-group">
                <label for="complicacao_anestesia_caso_sim"><strong>Caso a resposta anterior for "SIM" Qual complicação?</strong></label>
                <input class="form-control" id="complicacao_anestesia_caso_sim" type="text" name="complicacao_anestesia_caso_sim">
            </div>

            <div class="group-check">

                <label for=""><strong>Já teve alguma complicação com Coagulação Sanguínea?</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="complicacao_sanguinea_sim" name="complicacao_sanguinea_sim" value="sim">
                    <label class="form-check-label" for="complicacao_sanguinea_sim">Sim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="complicacao_sanguinea_nao" name="complicacao_sanguinea_nao" value="nao">
                    <label class="form-check-label" for="complicacao_sanguinea_nao">Não</label>
                </div>

            </div>

            <div class="form-group">
                <label for="complicacao_sanguinea_caso_sim"><strong>Caso a resposta anterior for "SIM" Quais?</strong></label>
                <input class="form-control" id="complicacao_sanguinea_caso_sim" type="text" name="complicacao_sanguinea_caso_sim">
            </div>

            <div class="group-check">

                <label for=""><strong>Possui alguma doença:</strong></label>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="pressao_alta" name="pressao_alta" value="Pressão Alta">
                    <label class="form-check-label" for="pressao_alta">Pressão Alta</label>
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="bronquite_asma" name="bronquite_asma" value="Bronquite/Asma">
                    <label class="form-check-label" for="bronquite_asma">Bronquite/Asma</label>
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="varizes" name="varizes" value="Varizes">
                    <label class="form-check-label" for="varizes">Varizes</label>
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="trombose" name="trombose" value="Trombose">
                    <label class="form-check-label" for="trombose">Trombose</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="doencas_cardiacas" name="doencas_cardiacas" value="Doenças Cardiacas">
                    <label class="form-check-label" for="doencas_cardiacas">Doenças Cardiacas</label>
                </div>
                
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="nenhuma_doenca" name="nenhuma_doenca" value="Nenhuma Doença">
                    <label class="form-check-label" for="nenhuma_doenca">Nenhuma Doença</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="outras_doencas" name="outras_doencas" value="Outras">
                    <label class="form-check-label" for="outras_doencas">Outras</label>
                </div>

            </div>

            <div class="form-group">
                <label for="outras_doencas_caso_sim"><strong>Caso a resposta anterior for "Outras" Diga Quais?</strong></label>
                <input class="form-control" id="outras_doencas_caso_sim" type="text" name="outras_doencas_caso_sim">
            </div>

            <div class="group-check">

                <label for=""><strong>Medicamentos</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="para_emagrecer" name="para_emagrecer" value="Para Emagrecer">
                    <label class="form-check-label" for="para_emagrecer">Para Emagrecer</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="anticoncepicional" name="anticoncepicional" value="Anticoncepicional">
                    <label class="form-check-label" for="anticoncepicional">Anticoncepicional</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="controlados" name="controlados" value="Controlados">
                    <label class="form-check-label" for="controlados">Controlados</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="continuo" name="continuo" value="Continuo">
                    <label class="form-check-label" for="continuo">Continuo</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="nenhum_medicamento" name="nenhum_medicamento" value="Nenhum Medicamento">
                    <label class="form-check-label" for="nenhum_medicamento">Nenhum Medicamento</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="outros_medicamentos" name="outros_medicamentos" value="Outros">
                    <label class="form-check-label" for="outros_medicamentos">Outros</label>
                </div>

            </div>

            <div class="form-group">
                <label for="outros_medicamentos_caso_sim"><strong>Caso a resposta anterior for "Outros" Diga Quais?</strong></label>
                <input class="form-control" id="outros_medicamentos_caso_sim" type="text" name="outros_medicamentos_caso_sim">
            </div>
            
            <div class="group-check">

                <label for=""><strong>Alergias?</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="alergia_check_sim" name="alergia_check_sim" value="sim">
                    <label class="form-check-label" for="alergia_check_sim">Sim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="alergia_check_nao" name="alergia_check_nao" value="nao">
                    <label class="form-check-label" for="alergia_check_nao">Não</label>
                </div>

            </div>

            <div class="form-group">
                <label for="alergia_caso_sim"><strong>Caso a resposta anterior seja "SIM" Diga Quais?</strong></label>
                <input class="form-control" id="alergia_caso_sim" type="text" name="alergia_caso_sim">
            </div>

            <div class="group-check">

                <label for=""><strong>Fumante?</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="fumante_check_sim" name="fumante_check_sim" value="sim">
                    <label class="form-check-label" for="fumante_check_sim">Sim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="fumante_check_nao" name="fumante_check_nao" value="nao">
                    <label class="form-check-label" for="fumante_check_nao">Não</label>
                </div>

            </div>

            <div class="form-group">
                <label for="fumante_caso_sim"><strong>Caso seja fumante diga há quanto tempo?</strong></label>
                <input class="form-control" id="fumante_caso_sim" type="text" name="fumante_caso_sim">
            </div>

            <div class="form-group">
                <label for="fumante_qtd_dia"><strong>Caso seja fumante, qual a quantidade que fuma por dia?</strong></label>
                <input class="form-control" id="fumante_qtd_dia" type="text" name="fumante_qtd_dia">
            </div>

            <div class="group-check">

            <label for=""><strong>Caso seja mulher, tem chance de estar grávida?</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="gravida_check_sim" name="gravida_check_sim" value="sim">
                    <label class="form-check-label" for="gravida_check_sim">Sim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="gravida_check_nao" name="gravida_check_nao" value="nao">
                    <label class="form-check-label" for="gravida_check_nao">Não</label>
                </div>

                <div class="form-group form-check" hidden>
                    <input type="checkbox" class="form-check-input" id="sem_informar_gravida" name="sem_informar_gravida" value="N/P gravida">
                    <label class="form-check-label" for="sem_informar_gravida">Não precisa informar</label>
                </div>

            </div>

            <div class="form-group">
                <label for="data_mestruacao"><strong>Data ultima mestruação:</strong></label>
                <input class="form-control" id="data_mestruacao" type="text" placeholder="  /  /  " name="data_mestruacao">
            </div>

            <div class="form-group">
                <label for="arquivos"><strong>Selecione 5 Fotos</strong></label>
                <input class="form-control-file" id="arquivos" type="file" name="arquivos[]" multiple="multiple">
            </div>

            <div class="group-check">

                <label for=""><strong>Declaro que as informações informadas são verdadeiras</strong></label>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="declaracao_check_sim" name="declaracao_check_sim" value="sim">
                    <label class="form-check-label" for="declaracao_check_sim">Sim</label>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="declaracao_check_nao" name="declaracao_check_nao" value="nao">
                    <label class="form-check-label" for="declaracao_check_nao">Não</label>
                </div>

            </div>

            <button class="btn btn-lg btn-success" type="submit" id="agendar">Agendar teleatendimento</button>
            
        </form>

        <img src="" >
    </div>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <script src="js/val_input_file.js"></script> 
    <script src="js/val_campos_obrigatorios.js"></script> 
    <script>
        $(document).ready(function(){
            //Fazendo a leitura do documento, caso tiver tentado enviar o formulario der erro e retornar para pagina
            //e o setor sexo tiver como masculino checkado já deixa o setor gravida disabilidato.
            if($("#masculino").is(":checked") == true){
                // alert("true");
                //Check o input sem_informar escondido;
                $("#sem_informar_gravida").attr("checked", "checked")
                $("#sem_informar_gestacao").attr("checked", "checked")
                $("#sem_informar_cesaria").attr("checked", "checked")

                //Desabilitando o setor Gravida
                $("#gravida_check_sim").attr("disabled", true)
                $("#gravida_check_nao").attr("disabled", true)                
                
                //Desabilitando o setor Gestações
                $("#gestacao_check_sim").attr("disabled", true)
                $("#gestacao_check_nao").attr("disabled", true)                
                
                //Desabilitando o setor Cesaria
                $("#cesaria_sim").attr("disabled", true)
                $("#cesaria_nao").attr("disabled", true)                
            }
        });

        $("#masculino").click(function(){
            //Resolvendo problemas com sexo masculino, para construir a query certa pro banco, pois o ultimo questionario
            //caso seja mulher, tem chance de estar gravida, se não for checado nenhuma opção não salva os dados no banco !

            if ($("#sem_informar_gravida").attr("checked") == "checked"){
                //Removendo o checked do input sem_informar_gravida escondido
                $("#sem_informar_gravida").removeAttr("checked");
                $("#sem_informar_gestacao").removeAttr("checked");
                $("#sem_informar_cesaria").removeAttr("checked");
                
                //Habilitando o setor Gravida
                $("#gravida_check_sim").removeAttr("disabled")
                $("#gravida_check_nao").removeAttr("disabled")

                //Desabilitando o setor Gestações
                $("#gestacao_check_sim").removeAttr("disabled")
                $("#gestacao_check_nao").removeAttr("disabled")                
                
                //Desabilitando o setor Cesaria
                $("#cesaria_sim").removeAttr("disabled")
                $("#cesaria_nao").removeAttr("disabled")
                
                console.log("N/P foi dechecado !");    
            }else{
                //Check o input sem_informar_gravida escondido;
                $("#sem_informar_gravida").attr("checked", "checked")
                $("#sem_informar_gestacao").attr("checked", "checked")
                $("#sem_informar_cesaria").attr("checked", "checked")

                //Desabilitando o setor Gravida
                $("#gravida_check_sim").attr("disabled", true)
                $("#gravida_check_nao").attr("disabled", true)

                //Desabilitando o setor Gestações
                $("#gestacao_check_sim").attr("disabled", true)
                $("#gestacao_check_nao").attr("disabled", true)                
                
                //Desabilitando o setor Cesaria
                $("#cesaria_sim").attr("disabled", true)
                $("#cesaria_nao").attr("disabled", true)

                console.log("N/P's foi checado !");

            }
        });
    </script>

</body>
</html>