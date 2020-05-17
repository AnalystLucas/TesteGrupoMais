let input_file = $("#arquivos");

$(document).ready(function(){
    input_file.change(function(){
        
        // console.log(input_file[0].files.length);

        if(input_file[0].files.length > 5){
        
            $("#agendar").attr("disabled", true);
            alert("Mais de 5 imagens selecionadas");
        
        }else if(input_file[0].files.length == 5){
            
            alert("Images selecionadas");
            $("#agendar").removeAttr("disabled");
            

        }else{
            $("#agendar").attr("disabled", true);
            alert("Menos de 5 Imagens selecionadas");
        }
    });
});
