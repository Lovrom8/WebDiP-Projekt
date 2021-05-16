$(document).ready(() =>{
    $.ajax({
        type: "POST",
        data: {
           korisnici : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {
            const stupci = { "Korisnicko_ime" : 0, 
                              "Blokiraj" :  '<a href=korisnici.php?id={ID_korisnik}&status=3>Blokiraj</a>', 
                              "Odblokiraj" : '<a href=korisnici.php?id={ID_korisnik}&status=2>Odblokiraj</a>' };
            const formatiranjeCelije = {'Blokiraj' : {'Status' : 3}, 'Odblokiraj' : {'Status' : 2}};
            const tablica2 = new Tablica('korisnici', data, stupci, 0, {}, formatiranjeCelije);

        }
    });   
});