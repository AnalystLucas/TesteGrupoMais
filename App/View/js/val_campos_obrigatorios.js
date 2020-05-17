let nome = $("#nome");
let tel_celular = $("#telefone_celular");
let email = $("#email");
let file = $("#arquivos");

$(document).ready(function(){

    $("#form_agendar").submit(function(e){
        e.preventDefault();

        if(nome.val() == "" || nome.val() == null){
            alert("O campo Nome Completo não esta preenchido");
            nome.focus();

        }
        else if(tel_celular.val() == "" || tel_celular.val() == null){
            alert("O campo Telefone Celular não esta preenchido");
            tel_celular.focus();
            
        }
        else if(email.val() == "" || email.val() == null){
            alert("O campo E-mail não esta preenchido");
            email.focus();
            
        }else if(file[0].files.length <= 4){
            alert("Imagens não foi selecionadas ou selecionou menos que 5");
            file.focus();
        }

        else{
            this.submit();
        }

    });
        
        
    
});