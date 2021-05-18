$(document).ready(() => {
    $.ajax({
        type: "POST",
        url: "http://barka.foi.hr/WebDiP/pomak_vremena/pomak.php?format=json.",
        dataType: "json",
        success: (data) => {
           $('#pomakVremena').val(data.WebDiP.vrijeme.pomak.brojSati);
        }
    });  

    $('#resetirajUvjete').click(() => {
        $('#datumUvjeta').val(new Date().toISOString());
    });
});