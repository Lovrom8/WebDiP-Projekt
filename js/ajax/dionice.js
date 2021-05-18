$(document).ready(() =>{
    const sve = $("#ajaxDionice").attr('sve');

    if(sve === "1")
        $("#dok").css("display", "block");
    console.log(sve);
    $.ajax({
        type: "POST",
        data: {
           dionice : "1"
        },
        url: "base/dohvati.php",
        dataType: "json",
        success: (data) => {       
            const stupci = { "Oznaka" : 0, "Polazište" : 0, "Odredište" : 0, "Naziv_kategorije" : 0, 
                            'Dokumenti': '<a href=dokumentDodaj.php?id={ID_dionica}&oznaka={Oznaka}>Dodaj</a>',
                            'Obilazak' :  '<a href=obilasci.php?id={ID_dionica}>Evidentiraj</a>',
                            };
            const tablica2 = new Tablica('dionice', data, stupci, 0);

        }
    });   
});