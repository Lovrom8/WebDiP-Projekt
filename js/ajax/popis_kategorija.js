$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
            kategorije: "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            $.each(data, (i, el) => {
                $("#kategorija").append(
                    $("<option></option>").val(el.ID_kategorija).html(el.Naziv_kategorije)
                )
            });
        },
        error: (er) => {
            console.log(er);
        }
    });
});
