$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           moderatori : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            console.log(data);
            $.each(data, (i, el) => {
                $("#idMod").append(
                   $("<option></option>").val(el.ID_korisnik).html(el.ImePrezime)
                )
            });
        }, error: (er) => {
            console.log(er);
        }
    });   
});