$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
            gradovi: "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            var listaGradova = data.map(grad => grad.Naziv);
            console.log(listaGradova);
            $("#odrediste").autocomplete({
                source: listaGradova
            });
            $("#polaziste").autocomplete({
                source: listaGradova
            });
        },
        error: (er) => {
            console.log(er);
        }
    });
});