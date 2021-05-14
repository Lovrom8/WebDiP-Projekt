$(document).ready(() => {
    $.ajax({
        type: "POST",
        data: {
           obilasci : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            const stupci = { "Oznaka" : 0, "Datum" : 0, "Broj_kilometara" : 0};
            const tablica = new Tablica('obilasci', data, stupci, 3); 

            let ukupno = 0;
            data.forEach((el) => {
                ukupno += el.Broj_kilometara;
                $('#ukupnoKm').text(ukupno);
            });
        }, error: (er) => {
            console.log(er);
        }
    });   
});