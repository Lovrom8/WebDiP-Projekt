const stupci = {  "Naziv_kategorije" : 0, 
                  "Uredi" : '<a href=kategorijaUredi.php?id={ID_kategorija}>Uredi</a>', 
                  "Moderatori" : '<a href=moderatoriKategorije.php?id={ID_kategorija}>Uredi moderatore</a>'
};
const tablica = new Tablica('kategorije', 'kategorije', stupci, 0);

$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           kategorije : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            $.each(data, (i, el) => {
                $("#kategorija").append(
                   $("<option></option>").val(el.ID_kategorija).html(el.Naziv_kategorije)
                )
            });
        }, error: (er) => {
            console.log(er);
        }
    });   
});