$("#cep").blur(function(){

    var cep = this.value.replace(/[^0-9]/, "");


    if(cep.length != 8){
        return false;
    }

    var url = "https://viacep.com.br/ws/"+cep+"/json/";

    $.getJSON(url, function(dadosRetorno){
        try{
            // Preenche os campos de acordo com o retorno da pesquisa
            $("#address").val(dadosRetorno.logradouro);
            $("#district").val(dadosRetorno.bairro);
            $("#city").val(dadosRetorno.localidade);
            $("#state").val(dadosRetorno.uf);
        }catch(ex){}
    });
});