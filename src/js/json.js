var arrayBase = [];

$("#btnSalvar").click(function () {
    vNome = $("#txtNome").val();
    vDesc = $("#txtDescricao").val();
    vInicio = $("#txtInicio").val();
    vFim = $("#txtFim").val();
    vUrgencia = $("#selurgencia").val();

   let array = {
        nome: vNome,
        descricao: vDesc,
        dataInicio: vInicio,
        dataFim: vFim,
        urgencia: vUrgencia
    };

    arrayBase.push(array);

    let jsonEnviar = JSON.stringify(arrayBase);

    $.ajax(
        {
            url: "php/gerador.php",
            data: {dado:jsonEnviar},   
            type:'POST',
        });
});