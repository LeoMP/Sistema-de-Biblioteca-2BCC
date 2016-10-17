//Função para filtrar a tabela
$(function(){
    $("#tabela input").keyup(function(){       
        var index = $(this).parent().index();
        var nth = "#tabela td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        $("#tabela tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabela input").blur(function(){
        $(this).val("");
    });
});

//Função para validar senha
function validarSenha(){
    var campo1 = document.getElementById('senha').value;
    var campo2 = document.getElementById('senha2').value;       
    if (campo1 == campo2){
        document.getElementById('resultado').style.color = "blue";
        document.getElementById('resultado').innerHTML = "Senhas iguais";
    } else {
        document.getElementById('resultado').style.color = "red";
        document.getElementById('resultado').innerHTML = "Senhas não correspondentes";       
      }
    }
